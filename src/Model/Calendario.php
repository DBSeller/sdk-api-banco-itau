<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * Calendario Class
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DBSeller
 */
class Calendario extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'calendario';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'data_de_vencimento'       => 'string',
        'validade_apos_vencimento' => 'int',
        'criacao'                  => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'data_de_vencimento'       => null,
        'validade_apos_vencimento' => null,
        'criacao'                  => null
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
        'data_de_vencimento'       => 'dataDeVencimento',
        'validade_apos_vencimento' => 'validadeAposVencimento',
        'criacao'                  => 'criacao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_de_vencimento'       => 'setDataDeVencimento',
        'validade_apos_vencimento' => 'setValidadeAposVencimento',
        'criacao'                  => 'setCriacao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_de_vencimento'       => 'getDataDeVencimento',
        'validade_apos_vencimento' => 'getValidadeAposVencimento',
        'criacao'                  => 'getCriacao'
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
        $this->container['data_de_vencimento'] = $this->hasIndex(
            'data_de_vencimento',
            $data
        );

        $this->container['validade_apos_vencimento'] = $this->hasIndex(
            'validade_apos_vencimento',
            $data
        );

        $this->container['criacao'] = $this->hasIndex(
            'criacao',
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

        if ($this->container['data_de_vencimento'] === null) {
            $invalidProperties[] = "'data_de_vencimento' can't be null";
        }

        if ($this->container['criacao'] === null) {
            $invalidProperties[] = "'criacao' can't be null";
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
     * @param string $data_de_vencimento É a data de vencimento da cobrança.
     * A cobrança pode ser honrada até esse dia,
     * inclusive, em qualquer horário do dia
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
     * @param int $validade_apos_vencimento Trata-se da quantidade
     * de dias corridos após o vencimento em que a cobrança poderá
     * ser paga. Caso vencido este período e a cobrança não tenha
     * sido paga, esta continuará ATIVA
     *
     * @return $this
     */
    public function setValidadeAposVencimento($validade_apos_vencimento)
    {
        $this->container['validade_apos_vencimento'] = $validade_apos_vencimento;

        return $this;
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
}
