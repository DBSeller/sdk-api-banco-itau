<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * DevolucaoPutResponseHorario Class
 * Estrutura que retorna o periodo da devolução
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DBSeller
 */
class DevolucaoPutResponseHorario extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'devolucaoPutResponse_horario';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'solicitacao' => 'string',
        'liquidacao' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'solicitacao' => null,
        'liquidacao' => null
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
        'solicitacao' => 'solicitacao',
        'liquidacao' => 'liquidacao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'solicitacao' => 'setSolicitacao',
        'liquidacao' => 'setLiquidacao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'solicitacao' => 'getSolicitacao',
        'liquidacao' => 'getLiquidacao'
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
        $this->container['solicitacao'] = $this->hasIndex('solicitacao', $data);
        $this->container['liquidacao']  = $this->hasIndex('liquidacao', $data);
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
     * Gets solicitacao
     *
     * @return string
     */
    public function getSolicitacao()
    {
        return $this->container['solicitacao'];
    }

    /**
     * Sets solicitacao
     *
     * @param string $solicitacao Horário no qual a devolução foi solicitada no PSP.
     *
     * @return $this
     */
    public function setSolicitacao($solicitacao)
    {
        $this->container['solicitacao'] = $solicitacao;

        return $this;
    }

    /**
     * Gets liquidacao
     *
     * @return string
     */
    public function getLiquidacao()
    {
        return $this->container['liquidacao'];
    }

    /**
     * Sets liquidacao
     *
     * @param string $liquidacao Horário no qual a devolução foi liquidada no PSP.
     *
     * @return $this
     */
    public function setLiquidacao($liquidacao)
    {
        $this->container['liquidacao'] = $liquidacao;

        return $this;
    }
}
