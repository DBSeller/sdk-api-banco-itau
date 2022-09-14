<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * ProblemaViolacoes Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class ProblemaViolacoes extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'problema_violacoes';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'razao' => 'string',
        'propriedade' => 'string',
        'valor' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'razao' => null,
        'propriedade' => null,
        'valor' => null
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
        'razao' => 'razao',
        'propriedade' => 'propriedade',
        'valor' => 'valor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'razao' => 'setRazao',
        'propriedade' => 'setPropriedade',
        'valor' => 'setValor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'razao' => 'getRazao',
        'propriedade' => 'getPropriedade',
        'valor' => 'getValor'
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
        $this->container['razao'] = isset($data['razao']) ? $data['razao'] : null;
        $this->container['propriedade'] = isset($data['propriedade']) ? $data['propriedade'] : null;
        $this->container['valor'] = isset($data['valor']) ? $data['valor'] : null;
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
     * Gets razao
     *
     * @return string
     */
    public function getRazao()
    {
        return $this->container['razao'];
    }

    /**
     * Sets razao
     *
     * @param string $razao Descrição do erro
     *
     * @return $this
     */
    public function setRazao($razao)
    {
        $this->container['razao'] = $razao;

        return $this;
    }

    /**
     * Gets propriedade
     *
     * @return string
     */
    public function getPropriedade()
    {
        return $this->container['propriedade'];
    }

    /**
     * Sets propriedade
     *
     * @param string $propriedade cobv.devedor
     *
     * @return $this
     */
    public function setPropriedade($propriedade)
    {
        $this->container['propriedade'] = $propriedade;

        return $this;
    }

    /**
     * Gets valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->container['valor'];
    }

    /**
     * Sets valor
     *
     * @param string $valor Valor da propriedade
     *
     * @return $this
     */
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;

        return $this;
    }
}
