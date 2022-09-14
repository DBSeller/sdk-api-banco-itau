<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * CobrancaImediataPostRequest Class
 *
 * @category Model
 * @package  DBSeller\ApiPixItau
 * @author   DBSeller
 */
class CobrancaImediataPostRequest extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cobrancaImediataPostRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'devedor'             => '\DBSeller\SdkBancoItau\Model\Pessoa',
        'valor'               => '\DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestValor',
        'loc'                 => '\DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestLoc',
        'chave'               => 'string',
        'solicitacao_pagador' => 'string',
        'calendario'          => '\DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestCalendario',
        'info_adicionais'     => '\DBSeller\SdkBancoItau\Model\InformacaoAdicional[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'devedor'             => null,
        'valor'               => null,
        'loc'                 => null,
        'chave'               => null,
        'solicitacao_pagador' => null,
        'calendario'          => null,
        'info_adicionais'     => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'devedor'             => 'devedor',
        'valor'               => 'valor',
        'loc'                 => 'loc',
        'chave'               => 'chave',
        'solicitacao_pagador' => 'solicitacaoPagador',
        'calendario'          => 'calendario',
        'info_adicionais'     => 'infoAdicionais'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'devedor'             => 'setDevedor',
        'valor'               => 'setValor',
        'loc'                 => 'setLoc',
        'chave'               => 'setChave',
        'solicitacao_pagador' => 'setSolicitacaoPagador',
        'calendario'          => 'setCalendario',
        'info_adicionais'     => 'setInfoAdicionais'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'devedor'             => 'getDevedor',
        'valor'               => 'getValor',
        'loc'                 => 'getLoc',
        'chave'               => 'getChave',
        'solicitacao_pagador' => 'getSolicitacaoPagador',
        'calendario'          => 'getCalendario',
        'info_adicionais'     => 'getInfoAdicionais'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['devedor']    = $this->hasIndex('devedor', $data);
        $this->container['valor']      = $this->hasIndex('valor', $data);
        $this->container['loc']        = $this->hasIndex('loc', $data);
        $this->container['chave']      = $this->hasIndex('chave', $data);
        $this->container['calendario'] = $this->hasIndex('calendario', $data);

        $this->container['info_adicionais'] = $this->hasIndex(
            'info_adicionais',
            $data
        );

        $this->container['solicitacao_pagador'] = $this->hasIndex(
            'solicitacao_pagador',
            $data
        );
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['valor'] === null) {
            $invalidProperties[] = "'valor' can't be null";
        }

        if ($this->container['chave'] === null) {
            $invalidProperties[] = "'chave' can't be null";
        }

        if ($this->container['calendario'] === null) {
            $invalidProperties[] = "'calendario' can't be null";
        }
        
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets devedor
     *
     * @return \DBSeller\SdkBancoItau\Model\Pessoa
     */
    public function getDevedor()
    {
        return $this->container['devedor'];
    }

    /**
     * Sets devedor
     *
     * @param \DBSeller\SdkBancoItau\Model\Pessoa $devedor devedor
     *
     * @return $this
     */
    public function setDevedor($devedor)
    {
        $this->container['devedor'] = $devedor;

        return $this;
    }

    /**
     * Gets valor
     *
     * @return \DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestValor
     */
    public function getValor()
    {
        return $this->container['valor'];
    }

    /**
     * Sets valor
     *
     * @param \DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestValor $valor valor
     *
     * @return $this
     */
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;

        return $this;
    }

    /**
     * Gets loc
     *
     * @return \DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestLoc
     */
    public function getLoc()
    {
        return $this->container['loc'];
    }

    /**
     * Sets loc
     *
     * @param \DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestLoc $loc loc
     *
     * @return $this
     */
    public function setLoc($loc)
    {
        $this->container['loc'] = $loc;

        return $this;
    }

    /**
     * Gets chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->container['chave'];
    }

    /**
     * Sets chave
     *
     * @param string $chave Chave DICT do recebedor
     *
     * @return $this
     */
    public function setChave($chave)
    {
        $this->container['chave'] = $chave;

        return $this;
    }

    /**
     * Gets solicitacao_pagador
     *
     * @return string
     */
    public function getSolicitacaoPagador()
    {
        return $this->container['solicitacao_pagador'];
    }

    /**
     * Sets solicitacao_pagador
     *
     * @param string $solicitacao_pagador O campo solicitacaoPagador,
     * determina um texto a ser apresentado ao pagador para que ele
     * possa digitar uma informação correlata, em formato livre,
     * a ser enviada ao recebedor
     *
     * @return $this
     */
    public function setSolicitacaoPagador($solicitacao_pagador)
    {
        $this->container['solicitacao_pagador'] = $solicitacao_pagador;

        return $this;
    }

    /**
     * Gets calendario
     *
     * @return \DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestCalendario
     */
    public function getCalendario()
    {
        return $this->container['calendario'];
    }

    /**
     * Sets calendario
     *
     * @param \DBSeller\SdkBancoItau\Model\CobrancaImediataPostRequestCalendario $calendario calendario
     *
     * @return $this
     */
    public function setCalendario($calendario)
    {
        $this->container['calendario'] = $calendario;

        return $this;
    }

    /**
     * Gets info_adicionais
     *
     * @return \DBSeller\SdkBancoItau\Model\InformacaoAdicional[]
     */
    public function getInfoAdicionais()
    {
        return $this->container['info_adicionais'];
    }

    /**
     * Sets info_adicionais
     *
     * @param \DBSeller\SdkBancoItau\Model\InformacaoAdicional[] $info_adicionais
     * Cada respectiva informação adicional contida na
     * lista (nome e valor) deve ser apresentada ao pagador
     *
     * @return $this
     */
    public function setInfoAdicionais($info_adicionais)
    {
        $this->container['info_adicionais'] = $info_adicionais;

        return $this;
    }
}
