<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * ValorMulta Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class ValorMulta extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'valor_multa';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'modalidade' => 'int',
        'valor_perc' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'modalidade' => null,
        'valor_perc' => null
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
        'modalidade' => 'modalidade',
        'valor_perc' => 'valorPerc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modalidade' => 'setModalidade',
        'valor_perc' => 'setValorPerc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modalidade' => 'getModalidade',
        'valor_perc' => 'getValorPerc'
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
        $this->container['modalidade'] = isset($data['modalidade']) ? $data['modalidade'] : null;
        $this->container['valor_perc'] = isset($data['valor_perc']) ? $data['valor_perc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['modalidade'] === null) {
            $invalidProperties[] = "'modalidade' can't be null";
        }
        if ($this->container['valor_perc'] === null) {
            $invalidProperties[] = "'valor_perc' can't be null";
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
     * Gets modalidade
     *
     * @return int
     */
    public function getModalidade()
    {
        return $this->container['modalidade'];
    }

    /**
     * Sets modalidade
     *
     * @param int $modalidade Modalidade da multa
     * <table><tr><td>Descrição</td><td>Dominio</td></tr><tr><td>Valor Fixo</td>
     * <td>1</td></tr><tr><td>Percentual</td><td>2</td></tr></table>
     *
     * @return $this
     */
    public function setModalidade($modalidade)
    {
        $this->container['modalidade'] = $modalidade;

        return $this;
    }

    /**
     * Gets valor_perc
     *
     * @return string
     */
    public function getValorPerc()
    {
        return $this->container['valor_perc'];
    }

    /**
     * Sets valor_perc
     *
     * @param string $valor_perc Multa do documento em valor absoluto ou percentual.
     *
     * @return $this
     */
    public function setValorPerc($valor_perc)
    {
        $this->container['valor_perc'] = $valor_perc;

        return $this;
    }
}
