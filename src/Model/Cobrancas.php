<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * Cobrancas Class
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DBSeller
 */
class Cobrancas extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'cobrancas';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'parametros' => '\DBSeller\SdkBancoItau\Model\CobrancasParametros',
        'cobs'       => '\DBSeller\SdkBancoItau\Model\Cobranca[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'parametros' => null,
        'cobs'       => null
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
        'parametros' => 'parametros',
        'cobs'       => 'cobs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parametros' => 'setParametros',
        'cobs'       => 'setCobs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parametros' => 'getParametros',
        'cobs'       => 'getCobs'
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
        $this->container['parametros'] = $this->hasIndex('parametros', $data);
        $this->container['cobs']       = $this->hasIndex('cobs', $data);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cobs'] === null) {
            $invalidProperties[] = "'cobs' can't be null";
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
     * Gets parametros
     *
     * @return \DBSeller\SdkBancoItau\Model\CobrancasParametros
     */
    public function getParametros()
    {
        return $this->container['parametros'];
    }

    /**
     * Sets parametros
     *
     * @param \DBSeller\SdkBancoItau\Model\CobrancasParametros $parametros parametros
     *
     * @return $this
     */
    public function setParametros($parametros)
    {
        $this->container['parametros'] = $parametros;

        return $this;
    }

    /**
     * Gets cobs
     *
     * @return \DBSeller\SdkBancoItau\Model\Cobranca[]
     */
    public function getCobs()
    {
        return $this->container['cobs'];
    }

    /**
     * Sets cobs
     *
     * @param \DBSeller\SdkBancoItau\Model\Cobranca[] $cobs Estrutura com
     * informações referentes a cobranca do documento
     *
     * @return $this
     */
    public function setCobs($cobs)
    {
        $this->container['cobs'] = $cobs;

        return $this;
    }
}
