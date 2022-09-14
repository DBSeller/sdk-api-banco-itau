<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * Retirada Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class Retirada extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'retirada';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'saque' => '\DBSeller\SdkBancoItau\Model\Saque',
        'troco' => '\DBSeller\SdkBancoItau\Model\Troco'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'saque' => null,
        'troco' => null
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
        'saque' => 'saque',
        'troco' => 'troco'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'saque' => 'setSaque',
        'troco' => 'setTroco'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'saque' => 'getSaque',
        'troco' => 'getTroco'
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
        $this->container['saque'] = isset($data['saque']) ? $data['saque'] : null;
        $this->container['troco'] = isset($data['troco']) ? $data['troco'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets saque
     *
     * @return \DBSeller\SdkBancoItau\Model\Saque
     */
    public function getSaque()
    {
        return $this->container['saque'];
    }

    /**
     * Sets saque
     *
     * @param \DBSeller\SdkBancoItau\Model\Saque $saque saque
     *
     * @return $this
     */
    public function setSaque($saque)
    {
        $this->container['saque'] = $saque;

        return $this;
    }

    /**
     * Gets troco
     *
     * @return \DBSeller\SdkBancoItau\Model\Troco
     */
    public function getTroco()
    {
        return $this->container['troco'];
    }

    /**
     * Sets troco
     *
     * @param \DBSeller\SdkBancoItau\Model\Troco $troco troco
     *
     * @return $this
     */
    public function setTroco($troco)
    {
        $this->container['troco'] = $troco;

        return $this;
    }
}
