<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * LoteCobrancaVencimentoPutRequest Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class LoteCobrancaVencimentoPutRequest extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'loteCobrancaVencimentoPutRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'descricao' => 'string',
        'cobsv' => '\DBSeller\SdkBancoItau\Model\LoteCobrancaVencimentoPutRequestCobsv[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'descricao' => null,
        'cobsv' => null
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
        'descricao' => 'descricao',
        'cobsv' => 'cobsv'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'descricao' => 'setDescricao',
        'cobsv' => 'setCobsv'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'descricao' => 'getDescricao',
        'cobsv' => 'getCobsv'
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
        $this->container['descricao'] = isset($data['descricao']) ? $data['descricao'] : null;
        $this->container['cobsv'] = isset($data['cobsv']) ? $data['cobsv'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['descricao'] === null) {
            $invalidProperties[] = "'descricao' can't be null";
        }
        if ($this->container['cobsv'] === null) {
            $invalidProperties[] = "'cobsv' can't be null";
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
     * Gets descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->container['descricao'];
    }

    /**
     * Sets descricao
     *
     * @param string $descricao Descrição do lote
     *
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->container['descricao'] = $descricao;

        return $this;
    }

    /**
     * Gets cobsv
     *
     * @return \DBSeller\SdkBancoItau\Model\LoteCobrancaVencimentoPutRequestCobsv[]
     */
    public function getCobsv()
    {
        return $this->container['cobsv'];
    }

    /**
     * Sets cobsv
     *
     * @param \DBSeller\SdkBancoItau\Model\LoteCobrancaVencimentoPutRequestCobsv[] $cobsv Dados enviados para criação
     * ou alteração da cobrança com vencimento via API Pix
     *
     * @return $this
     */
    public function setCobsv($cobsv)
    {
        $this->container['cobsv'] = $cobsv;

        return $this;
    }
}
