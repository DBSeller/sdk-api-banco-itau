<?php

namespace DBSeller\SdkBancoItau\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Psr7\Query;

use DBSeller\SdkBancoItau\Exceptions\ApiException;
use DBSeller\SdkBancoItau\Configuration;
use DBSeller\SdkBancoItau\HeaderSelector;
use DBSeller\SdkBancoItau\Resources\ObjectSerializerResource  as ObjectSerializer;

/**
 * PixRecebidosPixApi Class
 *
 * @category API
 * @package  DBSeller\SdkBancoItau
 * @author   DBSeller
 */
class PixRecebidosPixApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getpix
     *
     * @param  string $inicio Data inicial. Respeita RFC 3339. (required)
     * @param  string $fim Data de fim. Respeita RFC 3339. (required)
     * @param  string $txid ID de identificação do documento entre os bancos e o cliente emissor.
     * O campo txid é obrigatório e determina o identificador da transação.O objetivo desse campo
     * é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente
     * pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor.
     * Apesar de possuir o tamanho de 35 posições (PAC008), para QR Code Estático o tamanho máximo
     * permitido é de 25 posições (limitação EMV). No caso do QR Code dinâmico o campo deve possui
     * de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId
     * são:Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais,
     * de ‘0’ a ‘9’ (optional)
     * @param  bool $txid_presente Indicador do indentificador da taxa. (optional)
     * @param  bool $devolucao_presente Indicador de devolução. (optional)
     * @param  string $cpf CPF do pagador cadastrado na cobrança (optional)
     * @param  string $cnpj CNPJ do pagador cadastrado na cobrança. (optional)
     * @param  int $paginacao_pagina_atual Numero da Página que deseja realizar o acesso, valor
     * considerado por default 0. (optional)
     * @param  int $paginacao_itens_por_pagina Quantidade de ocorrência retornadas por pagina,
     * valor por default 100. (optional)
     * @param  string $x_correlation_id Identificador de correlação que serve como um agrupar
     * dentro da estrutura de audit trail (optional)
     *
     * @throws \DBSeller\SdkBancoItau\Exceptions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \DBSeller\SdkBancoItau\Model\Pixs
     */
    public function getpix(
        $inicio,
        $fim,
        $txid = null,
        $txid_presente = null,
        $devolucao_presente = null,
        $cpf = null,
        $cnpj = null,
        $paginacao_pagina_atual = null,
        $paginacao_itens_por_pagina = null,
        $x_correlation_id = null
    ) {
        list($response) = $this->getpixWithHttpInfo(
            $inicio,
            $fim,
            $txid,
            $txid_presente,
            $devolucao_presente,
            $cpf,
            $cnpj,
            $paginacao_pagina_atual,
            $paginacao_itens_por_pagina,
            $x_correlation_id
        );

        return $response;
    }

    /**
     * Operation getpixWithHttpInfo
     *
     * @param  string $inicio Data inicial. Respeita RFC 3339. (required)
     * @param  string $fim Data de fim. Respeita RFC 3339. (required)
     * @param  string $txid ID de identificação do documento entre os bancos e o cliente emissor.
     * O campo txid é obrigatório e determina o identificador da transação.O objetivo desse campo
     * é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente
     * pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor.
     * Apesar de possuir o tamanho de 35 posições (PAC008), para QR Code Estático o tamanho máximo
     * permitido é de 25 posições (limitação EMV). No caso do QR Code dinâmico o campo deve possuir
     * de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId
     * são:Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais,
     * de ‘0’ a ‘9’ (optional)
     * @param  bool $txid_presente Indicador do indentificador da taxa. (optional)
     * @param  bool $devolucao_presente Indicador de devolução. (optional)
     * @param  string $cpf CPF do pagador cadastrado na cobrança (optional)
     * @param  string $cnpj CNPJ do pagador cadastrado na cobrança. (optional)
     * @param  int $paginacao_pagina_atual Numero da Página que deseja realizar o acesso,
     * valor considerado por default 0. (optional)
     * @param  int $paginacao_itens_por_pagina Quantidade de ocorrência retornadas por pagina,
     * valor por default 100. (optional)
     * @param  string $x_correlation_id Identificador de correlação que serve como um agrupar
     * dentro da estrutura de audit trail (optional)
     *
     * @throws \DBSeller\SdkBancoItau\Exceptions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array|string of \DBSeller\SdkBancoItau\Model\Pixs, HTTP status code,
     * HTTP response headers (array of strings)
     */
    public function getpixWithHttpInfo(
        $inicio,
        $fim,
        $txid = null,
        $txid_presente = null,
        $devolucao_presente = null,
        $cpf = null,
        $cnpj = null,
        $paginacao_pagina_atual = null,
        $paginacao_itens_por_pagina = null,
        $x_correlation_id = null
    ) {
        $returnType = '\DBSeller\SdkBancoItau\Model\Pixs';
        $request    = $this->getpixRequest(
            $inicio,
            $fim,
            $txid,
            $txid_presente,
            $devolucao_presente,
            $cpf,
            $cnpj,
            $paginacao_pagina_atual,
            $paginacao_itens_por_pagina,
            $x_correlation_id
        );

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();

            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();

                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\Pixs',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento403',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento503',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getpixAsync
     *
     * @param  string $inicio Data inicial. Respeita RFC 3339. (required)
     * @param  string $fim Data de fim. Respeita RFC 3339. (required)
     * @param  string $txid ID de identificação do documento entre os bancos e o cliente
     * emissor. O campo txid é obrigatório e determina o identificador da transação. O objetivo
     * desse campo é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado
     * exclusivamente pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por
     * CNPJ do recebedor. Apesar de possuir o tamanho de 35 posições (PAC008), para QR Code
     * Estático o tamanho máximo permitido é de 25 posições (limitação EMV). No caso do QR
     * Code dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres
     * permitidos no contexto do Pix para o campo txId são:Letras minúsculas, de ‘a’ a ‘z’,
     * Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos
     * decimais, de ‘0’ a ‘9’ (optional)
     * @param  bool $txid_presente Indicador do indentificador da taxa. (optional)
     * @param  bool $devolucao_presente Indicador de devolução. (optional)
     * @param  string $cpf CPF do pagador cadastrado na cobrança (optional)
     * @param  string $cnpj CNPJ do pagador cadastrado na cobrança. (optional)
     * @param  int $paginacao_pagina_atual Numero da Página que deseja realizar o acesso, valor
     * considerado por default 0. (optional)
     * @param  int $paginacao_itens_por_pagina Quantidade de ocorrência retornadas por pagina,
     * valor por default 100. (optional)
     * @param  string $x_correlation_id Identificador de correlação que serve como um agrupar
     * dentro da estrutura de audit trail (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getpixAsync(
        $inicio,
        $fim,
        $txid = null,
        $txid_presente = null,
        $devolucao_presente = null,
        $cpf = null,
        $cnpj = null,
        $paginacao_pagina_atual = null,
        $paginacao_itens_por_pagina = null,
        $x_correlation_id = null
    ) {
        return $this->getpixAsyncWithHttpInfo(
            $inicio,
            $fim,
            $txid,
            $txid_presente,
            $devolucao_presente,
            $cpf,
            $cnpj,
            $paginacao_pagina_atual,
            $paginacao_itens_por_pagina,
            $x_correlation_id
        )
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getpixAsyncWithHttpInfo
     *
     * @param  string $inicio Data inicial. Respeita RFC 3339. (required)
     * @param  string $fim Data de fim. Respeita RFC 3339. (required)
     * @param  string $txid ID de identificação do documento entre os bancos e o cliente emissor.
     * O campo txid é obrigatório e determina o identificador da transação.O objetivo desse campo
     * é ser um elemento que possibilite a conciliação de pagamentos. O txid é criado exclusivamente
     * pelo usuário recebedor e está sob sua responsabilidade. Deve ser único por CNPJ do recebedor.
     * Apesar de possuir o tamanho de 35 posições (PAC008), para QR Code Estático o tamanho máximo
     * permitido é de 25 posições (limitação EMV). No caso do QR Code dinâmico o campo deve possuir
     * de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o campo txId
     * são:Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais,
     * de ‘0’ a ‘9’ (optional)
     * @param  bool $txid_presente Indicador do indentificador da taxa. (optional)
     * @param  bool $devolucao_presente Indicador de devolução. (optional)
     * @param  string $cpf CPF do pagador cadastrado na cobrança (optional)
     * @param  string $cnpj CNPJ do pagador cadastrado na cobrança. (optional)
     * @param  int $paginacao_pagina_atual Numero da Página que deseja realizar o acesso, valor
     * considerado por default 0. (optional)
     * @param  int $paginacao_itens_por_pagina Quantidade de ocorrência retornadas por pagina,
     * valor por default 100. (optional)
     * @param  string $x_correlation_id Identificador de correlação que serve como um agrupar
     * dentro da estrutura de audit trail (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getpixAsyncWithHttpInfo(
        $inicio,
        $fim,
        $txid = null,
        $txid_presente = null,
        $devolucao_presente = null,
        $cpf = null,
        $cnpj = null,
        $paginacao_pagina_atual = null,
        $paginacao_itens_por_pagina = null,
        $x_correlation_id = null
    ) {
        $returnType = '\DBSeller\SdkBancoItau\Model\Pixs';
        $request    = $this->getpixRequest(
            $inicio,
            $fim,
            $txid,
            $txid_presente,
            $devolucao_presente,
            $cpf,
            $cnpj,
            $paginacao_pagina_atual,
            $paginacao_itens_por_pagina,
            $x_correlation_id
        );

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();

                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response   = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getpix'
     *
     * @param  string $inicio Data inicial. Respeita RFC 3339. (required)
     * @param  string $fim Data de fim. Respeita RFC 3339. (required)
     * @param  string $txid ID de identificação do documento entre os bancos e o
     * cliente emissor. O campo txid é obrigatório e determina o identificador da
     * transação.O objetivo desse campo é ser um elemento que possibilite a conciliação
     * de pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está sob
     * sua responsabilidade. Deve ser único por CNPJ do recebedor. Apesar de possuir o
     * tamanho de 35 posições (PAC008), para QR Code Estático o tamanho máximo permitido
     * é de 25 posições (limitação EMV). No caso do QR Code dinâmico o campo deve possuir
     * de 26 posição até 35 posições. Os caracteres permitidos no contexto do Pix para o
     * campo txId são:Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’,
     * Dígitos decimais, de ‘0’ a ‘9’ (optional)
     * @param  bool $txid_presente Indicador do indentificador da taxa. (optional)
     * @param  bool $devolucao_presente Indicador de devolução. (optional)
     * @param  string $cpf CPF do pagador cadastrado na cobrança (optional)
     * @param  string $cnpj CNPJ do pagador cadastrado na cobrança. (optional)
     * @param  int $paginacao_pagina_atual Numero da Página que deseja realizar o acesso,
     * valor considerado por default 0. (optional)
     * @param  int $paginacao_itens_por_pagina Quantidade de ocorrência retornadas por pagina,
     * valor por default 100. (optional)
     * @param  string $x_correlation_id Identificador de correlação que serve como um agrupar
     * dentro da estrutura de audit trail (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getpixRequest(
        $inicio,
        $fim,
        $txid = null,
        $txid_presente = null,
        $devolucao_presente = null,
        $cpf = null,
        $cnpj = null,
        $paginacao_pagina_atual = null,
        $paginacao_itens_por_pagina = null,
        $x_correlation_id = null
    ) {
        // verify the required parameter 'inicio' is set
        if ($inicio === null || (is_array($inicio) && count($inicio) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inicio when calling getpix'
            );
        }
        // verify the required parameter 'fim' is set
        if ($fim === null || (is_array($fim) && count($fim) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fim when calling getpix'
            );
        }

        $resourcePath = '/pix';
        $formParams   = [];
        $queryParams  = [];
        $headerParams = [];
        $httpBody     = '';
        $multipart    = false;

        // query params
        if ($inicio !== null) {
            $queryParams['inicio'] = ObjectSerializer::toQueryValue($inicio, null);
        }

        // query params
        if ($fim !== null) {
            $queryParams['fim'] = ObjectSerializer::toQueryValue($fim, null);
        }

        // query params
        if ($txid !== null) {
            $queryParams['txid'] = ObjectSerializer::toQueryValue($txid, null);
        }

        // query params
        if ($txid_presente !== null) {
            $queryParams['txidPresente'] = ObjectSerializer::toQueryValue($txid_presente, null);
        }

        // query params
        if ($devolucao_presente !== null) {
            $queryParams['devolucaoPresente'] = ObjectSerializer::toQueryValue($devolucao_presente, null);
        }

        // query params
        if ($cpf !== null) {
            $queryParams['cpf'] = ObjectSerializer::toQueryValue($cpf, null);
        }

        // query params
        if ($cnpj !== null) {
            $queryParams['cnpj'] = ObjectSerializer::toQueryValue($cnpj, null);
        }

        // query params
        if ($paginacao_pagina_atual !== null) {
            $queryParams['paginacao.paginaAtual'] = ObjectSerializer::toQueryValue(
                $paginacao_pagina_atual,
                null
            );
        }

        // query params
        if ($paginacao_itens_por_pagina !== null) {
            $queryParams['paginacao.itensPorPagina'] = ObjectSerializer::toQueryValue(
                $paginacao_itens_por_pagina,
                null
            );
        }

        // header params
        if ($x_correlation_id !== null) {
            $headerParams['x-correlationID'] = ObjectSerializer::toHeaderValue($x_correlation_id);
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        $headers        = $this->headerSelector->aplicarHeadersITAU($this->config, $headers);
        $defaultHeaders = [];

        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);

        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getpixe2eid
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     *
     * @throws \DBSeller\SdkBancoItau\Exceptions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \DBSeller\SdkBancoItau\Model\Pix
     */
    public function getpixe2eid($e2eid)
    {
        list($response) = $this->getpixe2eidWithHttpInfo($e2eid);

        return $response;
    }

    /**
     * Operation getpixe2eidWithHttpInfo
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     *
     * @throws \DBSeller\SdkBancoItau\Exceptions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array|string of \DBSeller\SdkBancoItau\Model\Pix, HTTP status code,
     * HTTP response headers (array of strings)
     */
    public function getpixe2eidWithHttpInfo($e2eid)
    {
        $returnType = '\DBSeller\SdkBancoItau\Model\Pix';
        $request    = $this->getpixe2eidRequest($e2eid);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();

            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();

                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\Pix',
                        $e->getResponseHeaders()
                    );
                    
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento403',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento404',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento503',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getpixe2eidAsync
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getpixe2eidAsync($e2eid)
    {
        return $this->getpixe2eidAsyncWithHttpInfo($e2eid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getpixe2eidAsyncWithHttpInfo
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getpixe2eidAsyncWithHttpInfo($e2eid)
    {
        $returnType = '\DBSeller\SdkBancoItau\Model\Pix';
        $request    = $this->getpixe2eidRequest($e2eid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();

                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response   = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getpixe2eid'
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getpixe2eidRequest($e2eid)
    {
        // verify the required parameter 'e2eid' is set
        if ($e2eid === null || (is_array($e2eid) && count($e2eid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $e2eid when calling getpixe2eid'
            );
        }

        $resourcePath = '/pix/{e2eid}';
        $formParams   = [];
        $queryParams  = [];
        $headerParams = [];
        $httpBody     = '';
        $multipart    = false;

        // path params
        if ($e2eid !== null) {
            $resourcePath = str_replace(
                '{' . 'e2eid' . '}',
                ObjectSerializer::toPathValue($e2eid),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }

                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        $headers        = $this->headerSelector->aplicarHeadersITAU($this->config, $headers);
        $defaultHeaders = [];

        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);

        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getpixe2eiddevolucaoid
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     *
     * @throws \DBSeller\SdkBancoItau\Exceptions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \DBSeller\SdkBancoItau\Model\Devolucao
     */
    public function getpixe2eiddevolucaoid($e2eid, $id)
    {
        list($response) = $this->getpixe2eiddevolucaoidWithHttpInfo($e2eid, $id);
        return $response;
    }

    /**
     * Operation getpixe2eiddevolucaoidWithHttpInfo
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     *
     * @throws \DBSeller\SdkBancoItau\Exceptions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \DBSeller\SdkBancoItau\Model\Devolucao, HTTP status code,
     * HTTP response headers (array of strings)
     */
    public function getpixe2eiddevolucaoidWithHttpInfo($e2eid, $id)
    {
        $returnType = '\DBSeller\SdkBancoItau\Model\Devolucao';
        $request    = $this->getpixe2eiddevolucaoidRequest($e2eid, $id);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();

            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();

                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\Devolucao',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento403',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento404',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento503',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getpixe2eiddevolucaoidAsync
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getpixe2eiddevolucaoidAsync($e2eid, $id)
    {
        return $this->getpixe2eiddevolucaoidAsyncWithHttpInfo($e2eid, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getpixe2eiddevolucaoidAsyncWithHttpInfo
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getpixe2eiddevolucaoidAsyncWithHttpInfo($e2eid, $id)
    {
        $returnType = '\DBSeller\SdkBancoItau\Model\Devolucao';
        $request    = $this->getpixe2eiddevolucaoidRequest($e2eid, $id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();

                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();

                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response   = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getpixe2eiddevolucaoid'
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getpixe2eiddevolucaoidRequest($e2eid, $id)
    {
        // verify the required parameter 'e2eid' is set
        if ($e2eid === null || (is_array($e2eid) && count($e2eid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $e2eid when calling getpixe2eiddevolucaoid'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getpixe2eiddevolucaoid'
            );
        }

        $resourcePath = '/pix/{e2eid}/devolucao/{id}';
        $formParams   = [];
        $queryParams  = [];
        $headerParams = [];
        $httpBody     = '';
        $multipart    = false;

        // path params
        if ($e2eid !== null) {
            $resourcePath = str_replace(
                '{' . 'e2eid' . '}',
                ObjectSerializer::toPathValue($e2eid),
                $resourcePath
            );
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }

                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        $headers        = $this->headerSelector->aplicarHeadersITAU($this->config, $headers);
        $defaultHeaders = [];

        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);

        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation putpixe2eiddevolucaoid
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     * @param  \DBSeller\SdkBancoItau\Model\DevolucaoPutRequest $body body (optional)
     *
     * @throws \DBSeller\SdkBancoItau\Exceptions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public function putpixe2eiddevolucaoid($e2eid, $id, $body = null)
    {
        $this->putpixe2eiddevolucaoidWithHttpInfo($e2eid, $id, $body);
    }

    /**
     * Operation putpixe2eiddevolucaoidWithHttpInfo
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     * @param  \DBSeller\SdkBancoItau\Model\DevolucaoPutRequest $body (optional)
     *
     * @throws \DBSeller\SdkBancoItau\Exceptions\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function putpixe2eiddevolucaoidWithHttpInfo($e2eid, $id, $body = null)
    {
        $returnType = '';
        $request    = $this->putpixe2eiddevolucaoidRequest($e2eid, $id, $body);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\DevolucaoPutResponse',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\Problema',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento403',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento404',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DBSeller\SdkBancoItau\Model\CobrancaVencimento503',
                        $e->getResponseHeaders()
                    );

                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putpixe2eiddevolucaoidAsync
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     * @param  \DBSeller\SdkBancoItau\Model\DevolucaoPutRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putpixe2eiddevolucaoidAsync($e2eid, $id, $body = null)
    {
        return $this->putpixe2eiddevolucaoidAsyncWithHttpInfo($e2eid, $id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putpixe2eiddevolucaoidAsyncWithHttpInfo
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     * @param  \DBSeller\SdkBancoItau\Model\DevolucaoPutRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putpixe2eiddevolucaoidAsyncWithHttpInfo($e2eid, $id, $body = null)
    {
        $returnType = '';
        $request    = $this->putpixe2eiddevolucaoidRequest($e2eid, $id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response   = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'putpixe2eiddevolucaoid'
     *
     * @param  string $e2eid Id fim a fim da transação. (required)
     * @param  string $id id da devolução (required)
     * @param  \DBSeller\SdkBancoItau\Model\DevolucaoPutRequest $body (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function putpixe2eiddevolucaoidRequest($e2eid, $id, $body = null)
    {
        // verify the required parameter 'e2eid' is set
        if ($e2eid === null || (is_array($e2eid) && count($e2eid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $e2eid when calling putpixe2eiddevolucaoid'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling putpixe2eiddevolucaoid'
            );
        }

        $resourcePath = '/pix/{e2eid}/devolucao/{id}';
        $formParams   = [];
        $queryParams  = [];
        $headerParams = [];
        $httpBody     = '';
        $multipart    = false;

        // path params
        if ($e2eid !== null) {
            $resourcePath = str_replace(
                '{' . 'e2eid' . '}',
                ObjectSerializer::toPathValue($e2eid),
                $resourcePath
            );
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }

                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        $headers        = $this->headerSelector->aplicarHeadersITAU($this->config, $headers);
        $defaultHeaders = [];

        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     *
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

        if ($this->config->isModoProducao()) {
            if ($this->config->getPathCertificado() !== null && $this->config->getPathPrivateKey() !== null) {
                $options['cert'] = $this->config->getPathCertificado();
                $options['ssl_key'] = $this->config->getPathPrivateKey();
            }
        }

        return $options;
    }
}
