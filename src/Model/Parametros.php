<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * Parametros Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class Parametros extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'parametros';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'inicio' => 'string',
        'fim' => 'string',
        'paginacao' => '\DBSeller\SdkBancoItau\Model\ParametrosPaginacao'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'inicio' => null,
        'fim' => null,
        'paginacao' => null
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
        'inicio' => 'inicio',
        'fim' => 'fim',
        'paginacao' => 'paginacao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inicio' => 'setInicio',
        'fim' => 'setFim',
        'paginacao' => 'setPaginacao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inicio' => 'getInicio',
        'fim' => 'getFim',
        'paginacao' => 'getPaginacao'
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
        $this->container['inicio'] = isset($data['inicio']) ? $data['inicio'] : null;
        $this->container['fim'] = isset($data['fim']) ? $data['fim'] : null;
        $this->container['paginacao'] = isset($data['paginacao']) ? $data['paginacao'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inicio'] === null) {
            $invalidProperties[] = "'inicio' can't be null";
        }
        if ($this->container['fim'] === null) {
            $invalidProperties[] = "'fim' can't be null";
        }
        if ($this->container['paginacao'] === null) {
            $invalidProperties[] = "'paginacao' can't be null";
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
     * Gets inicio
     *
     * @return string
     */
    public function getInicio()
    {
        return $this->container['inicio'];
    }

    /**
     * Sets inicio
     *
     * @param string $inicio Data inicial. Respeita RFC 3339.
     *
     * @return $this
     */
    public function setInicio($inicio)
    {
        $this->container['inicio'] = $inicio;

        return $this;
    }

    /**
     * Gets fim
     *
     * @return string
     */
    public function getFim()
    {
        return $this->container['fim'];
    }

    /**
     * Sets fim
     *
     * @param string $fim Data de fim. Respeita RFC 3339.
     *
     * @return $this
     */
    public function setFim($fim)
    {
        $this->container['fim'] = $fim;

        return $this;
    }

    /**
     * Gets paginacao
     *
     * @return \DBSeller\SdkBancoItau\Model\ParametrosPaginacao
     */
    public function getPaginacao()
    {
        return $this->container['paginacao'];
    }

    /**
     * Sets paginacao
     *
     * @param \DBSeller\SdkBancoItau\Model\ParametrosPaginacao $paginacao paginacao
     *
     * @return $this
     */
    public function setPaginacao($paginacao)
    {
        $this->container['paginacao'] = $paginacao;

        return $this;
    }
}
