<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * CobrancaVencimentoPatchResponseCalendario Class
 * Os campos aninhados sob o identificador calendário
 * e que organizam informações a respeito de controle de
 * tempo da cobrança
 *
 * @category Model
 * @package  DBSeller\ApiPixItau\Model
 * @author   DBSeller
 */
class CobrancaVencimentoPatchResponseCalendario extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'cobrancaVencimentoPatchResponse_calendario';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'criacao' => 'string',
        'data_de_vencimento' => 'string',
        'validade_apos_vencimento' => 'int'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'criacao' => null,
        'data_de_vencimento' => null,
        'validade_apos_vencimento' => null
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
        'criacao' => 'criacao',
        'data_de_vencimento' => 'dataDeVencimento',
        'validade_apos_vencimento' => 'validadeAposVencimento'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'criacao' => 'setCriacao',
        'data_de_vencimento' => 'setDataDeVencimento',
        'validade_apos_vencimento' => 'setValidadeAposVencimento'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'criacao' => 'getCriacao',
        'data_de_vencimento' => 'getDataDeVencimento',
        'validade_apos_vencimento' => 'getValidadeAposVencimento'
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
        $this->container['criacao']  = $this->hasIndex(
            'criacao',
            $data
        );

        $this->container['data_de_vencimento'] = $this->hasIndex(
            'data_de_vencimento',
            $data
        );

        $this->container['validade_apos_vencimento'] = $this->hasIndex(
            'validade_apos_vencimento',
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

        if ($this->container['criacao'] === null) {
            $invalidProperties[] = "'criacao' can't be null";
        }

        if ($this->container['data_de_vencimento'] === null) {
            $invalidProperties[] = "'data_de_vencimento' can't be null";
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
     * Gets criacao
     *
     * @return string
     */
    public function getCriacao()
    {
        return $this->container['criacao'];
    }

    /**
     * Sets criacao
     *
     * @param string $criacao Data e Hora de criação da cobrança
     *
     * @return $this
     */
    public function setCriacao($criacao)
    {
        $this->container['criacao'] = $criacao;

        return $this;
    }

    /**
     * Gets data_de_vencimento
     *
     * @return string
     */
    public function getDataDeVencimento()
    {
        return $this->container['data_de_vencimento'];
    }

    /**
     * Sets data_de_vencimento
     *
     * @param string $data_de_vencimento Data de vencimento da cobrança
     *
     * @return $this
     */
    public function setDataDeVencimento($data_de_vencimento)
    {
        $this->container['data_de_vencimento'] = $data_de_vencimento;

        return $this;
    }

    /**
     * Gets validade_apos_vencimento
     *
     * @return int
     */
    public function getValidadeAposVencimento()
    {
        return $this->container['validade_apos_vencimento'];
    }

    /**
     * Sets validade_apos_vencimento
     *
     * @param int $validade_apos_vencimento Quantidade de dias corridos após
     * o vencimento em que a cobrança poderá ser paga
     *
     * @return $this
     */
    public function setValidadeAposVencimento($validade_apos_vencimento)
    {
        $this->container['validade_apos_vencimento'] = $validade_apos_vencimento;

        return $this;
    }
}
