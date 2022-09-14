<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * DevolucaoPutRequest Class
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DBSeller
 */
class DevolucaoPutRequest extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'devolucaoPutRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'valor' => 'string',
        'natureza' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'valor' => null,
        'natureza' => null,
        'descricao' => null
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
        'valor' => 'valor',
        'natureza' => 'natureza',
        'descricao' => 'descricao'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'valor' => 'setValor',
        'natureza' => 'setNatureza',
        'descricao' => 'setDescricao'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'valor' => 'getValor',
        'natureza' => 'getNatureza',
        'descricao' => 'getDescricao'
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
        $this->container['valor']     = $this->hasIndex('valor', $data);
        $this->container['natureza']  = $this->hasIndex('natureza', $data);
        $this->container['descricao'] = $this->hasIndex('descricao', $data);
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
     * @param string $valor Valor da devolução
     *
     * @return $this
     */
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;

        return $this;
    }

    /**
     * Gets natureza
     *
     * @return string
     */
    public function getNatureza()
    {
        return $this->container['natureza'];
    }

    /**
     * Sets natureza
     *
     * @param string $natureza Indica qual é a natureza da devolução.
     * Uma devolução pode ser relacionada a um Pix comum (corresponde ao código
     * MD06 da pacs.004), ou a um Pix de Saque ou Troco (corresponde ao código SL02 da pacs.004).
     * Na ausência deste campo a natureza deve ser interpretada como sendo de um Pix comum (ORIGINAL).
     *
     * @return $this
     */
    public function setNatureza($natureza)
    {
        $this->container['natureza'] = $natureza;

        return $this;
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
     * @param string $descricao O campo descricao, opcional, determina um texto a ser apresentado
     * ao pagador contendo informações sobre a devolução. Esse texto será preenchido, na pacs.004,
     * pelo PSP do recebedor, no campo RemittanceInformation. O tamanho do campo na pacs.004 está
     * limitado a 140 caracteres.
     *
     * @return $this
     */
    public function setDescricao($descricao)
    {
        $this->container['descricao'] = $descricao;

        return $this;
    }
}
