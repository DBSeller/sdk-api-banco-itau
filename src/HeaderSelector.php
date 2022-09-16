<?php

namespace DBSeller\SdkBancoItau;

/**
 * HeaderSelector Class
 *
 * @category Class
 * @package  DBSeller\SdkBancoItau
 * @author   DBSeller
 */
class HeaderSelector
{
    /**
     * Aplicar Headers ITAU
     *
     * @param object $config
     * @param string[] $headersInput
     *
     * @return array
     */
    public function aplicarHeadersITAU($config, $headersInput)
    {     
        if ($config->isModoProducao()) {
            if ($config->getAccessToken() !== null ||
                $config->getAccessToken() !== ''
            ) {
                $headersInput['Authorization'] = 'Bearer ' . $config->getAccessToken();
            }
        } else {
            if ($config->getAccessToken() !== null ||
                $config->getAccessToken() !== ''
            ) {
                $headersInput['x-sandbox-token'] = $config->getAccessToken();
            }
        }

        $headersInput['x-itau-apikey'] = (
            isset($config->apiKeys['client_id']) ?
            $config->apiKeys['client_id'] :
            123
        );
        
        return $headersInput;
    }

    /**
     * Select Headers
     *
     * @param string[] $accept
     * @param string[] $contentTypes
     *
     * @return array
     */
    public function selectHeaders($accept, $contentTypes)
    {
        $headers = [];
        $accept  = $this->selectAcceptHeader($accept);

        if ($accept !== null) {
            $headers['Accept'] = $accept;
        }

        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);

        return $headers;
    }

    /**
     * Select Headers For Multipart
     *
     * @param string[] $accept
     *
     * @return array
     */
    public function selectHeadersForMultipart($accept)
    {
        $headers = $this->selectHeaders($accept, []);

        unset($headers['Content-Type']);
        
        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string Accept (e.g. application/json)
     */
    private function selectAcceptHeader($accept)
    {
        if (count($accept) === 0 || (count($accept) === 1 && $accept[0] === '')) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        } else {
            return implode(',', $accept);
        }
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $contentType Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader($contentType)
    {
        if (count($contentType) === 0 || (count($contentType) === 1 && $contentType[0] === '')) {
            return 'application/json';
        } elseif (preg_grep("/application\/json/i", $contentType)) {
            return 'application/json';
        } else {
            return implode(',', $contentType);
        }
    }
}
