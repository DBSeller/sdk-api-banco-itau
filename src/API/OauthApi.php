<?php

namespace DBSeller\SdkBancoItau\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\RequestException;

use DBSeller\SdkBancoItau\Exceptions\ApiException;
use DBSeller\SdkBancoItau\Configuration;
use DBSeller\SdkBancoItau\HeaderSelector;

/**
 * Geração de AcessToken via OAuth2
 */
class OauthApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     *
     * @var Configuration
     */
    protected $config;

    /**
     *
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
    }

    /**
     *
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Obtém um Acces token oauth para uso nas requisições da Api Pix Itau
     *
     * @return string Accestoken
     */
    public function gerarAccessToken()
    {
        $httpBody     = '';
        $response     = null;
        $token        = "";
        $options      = $this->createHttpClientOption();
        $clientId     = $this->config->getApiKey('client_id');
        $clientSecret = $this->config->getApiKey('client_secret');

        $httpBody = '{ "client_id":"' . $clientId . '", "client_secret":"' . $clientSecret . '" }';

        $headerParams = [];
        $headerParams['Content-Type']  = "application/json";
        $headerParams['x-itau-apikey'] = $clientId;

        if ($this->config->isModoProducao()) {
            if ($this->config->getPathCertificado() !== null && $this->config->getPathPrivateKey() !== null) {
                $options['cert']    = $this->config->getPathCertificado();
                $options['ssl_key'] = $this->config->getPathPrivateKey();
            } else {
                throw new ApiException(
                    "* Modo Producao: Path p/ Certificado e path p/ Private Key obrigatorio.",
                    0,
                    null,
                    null
                );
            }
        }

        $request = new Request('POST', $this->config->getUrlOAuth(), $headerParams, $httpBody);

        try {
            $response = $this->client->send($request, $options);

            if ($response->getBody()) {
                $bodyJson = json_decode($response->getBody());
                $token = $bodyJson->{'access_token'};
            }
        } catch (RequestException $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        }

        return $token;
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];

        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');

            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
