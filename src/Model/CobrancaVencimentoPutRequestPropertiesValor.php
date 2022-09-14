<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * CobrancaVencimentoPutRequestPropertiesValor Class
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DBSeller
 */
class CobrancaVencimentoPutRequestPropertiesValor extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'cobrancaVencimentoPutRequest_valor';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'original' => 'string',
        'multa' => '\DBSeller\SdkBancoItau\Model\ValorMulta',
        'juros' => '\DBSeller\SdkBancoItau\Model\ValorJuros',
        'abatimento' => '\DBSeller\SdkBancoItau\Model\ValorAbatimento',
        'desconto' => '\DBSeller\SdkBancoItau\Model\ValorDesconto'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'original' => null,
        'multa' => null,
        'juros' => null,
        'abatimento' => null,
        'desconto' => null
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
        'original' => 'original',
        'multa' => 'multa',
        'juros' => 'juros',
        'abatimento' => 'abatimento',
        'desconto' => 'desconto'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'original' => 'setOriginal',
        'multa' => 'setMulta',
        'juros' => 'setJuros',
        'abatimento' => 'setAbatimento',
        'desconto' => 'setDesconto'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'original' => 'getOriginal',
        'multa' => 'getMulta',
        'juros' => 'getJuros',
        'abatimento' => 'getAbatimento',
        'desconto' => 'getDesconto'
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
        $this->container['original']   = $this->hasIndex('original', $data);
        $this->container['multa']      = $this->hasIndex('multa', $data);
        $this->container['juros']      = $this->hasIndex('juros', $data);
        $this->container['abatimento'] = $this->hasIndex('abatimento', $data);
        $this->container['desconto']   = $this->hasIndex('desconto', $data);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['original'] === null) {
            $invalidProperties[] = "'original' can't be null";
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
     * Gets original
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param string $original Valor nominal/original da cobrança.
     *
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets multa
     *
     * @return \DBSeller\SdkBancoItau\Model\ValorMulta
     */
    public function getMulta()
    {
        return $this->container['multa'];
    }

    /**
     * Sets multa
     *
     * @param \DBSeller\SdkBancoItau\Model\ValorMulta $multa multa
     *
     * @return $this
     */
    public function setMulta($multa)
    {
        $this->container['multa'] = $multa;

        return $this;
    }

    /**
     * Gets juros
     *
     * @return \DBSeller\SdkBancoItau\Model\ValorJuros
     */
    public function getJuros()
    {
        return $this->container['juros'];
    }

    /**
     * Sets juros
     *
     * @param \DBSeller\SdkBancoItau\Model\ValorJuros $juros juros
     *
     * @return $this
     */
    public function setJuros($juros)
    {
        $this->container['juros'] = $juros;

        return $this;
    }

    /**
     * Gets abatimento
     *
     * @return \DBSeller\SdkBancoItau\Model\ValorAbatimento
     */
    public function getAbatimento()
    {
        return $this->container['abatimento'];
    }

    /**
     * Sets abatimento
     *
     * @param \DBSeller\SdkBancoItau\Model\ValorAbatimento $abatimento abatimento
     *
     * @return $this
     */
    public function setAbatimento($abatimento)
    {
        $this->container['abatimento'] = $abatimento;

        return $this;
    }

    /**
     * Gets desconto
     *
     * @return \DBSeller\SdkBancoItau\Model\ValorDesconto
     */
    public function getDesconto()
    {
        return $this->container['desconto'];
    }

    /**
     * Sets desconto
     *
     * @param \DBSeller\SdkBancoItau\Model\ValorDesconto $desconto desconto
     *
     * @return $this
     */
    public function setDesconto($desconto)
    {
        $this->container['desconto'] = $desconto;

        return $this;
    }
}
