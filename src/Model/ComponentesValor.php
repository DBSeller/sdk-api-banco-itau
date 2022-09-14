<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * ComponentesValor Class
 *
 * @category Class
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DBSeller
 */
class ComponentesValor extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'componentesValor';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'original' => '\DBSeller\SdkBancoItau\Model\ComponentesValorOriginal',
        'saque' => '\DBSeller\SdkBancoItau\Model\SaqueCv',
        'troco' => '\DBSeller\SdkBancoItau\Model\TrocoCv',
        'juros' => '\DBSeller\SdkBancoItau\Model\ComponentesValorJuros',
        'multa' => '\DBSeller\SdkBancoItau\Model\ComponentesValorMulta',
        'desconto' => '\DBSeller\SdkBancoItau\Model\ComponentesValorDesconto',
        'abatimento' => '\DBSeller\SdkBancoItau\Model\ComponentesValorAbatimento'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'original' => null,
        'saque' => null,
        'troco' => null,
        'juros' => null,
        'multa' => null,
        'desconto' => null,
        'abatimento' => null
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
        'saque' => 'saque',
        'troco' => 'troco',
        'juros' => 'juros',
        'multa' => 'multa',
        'desconto' => 'desconto',
        'abatimento' => 'abatimento'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'original' => 'setOriginal',
        'saque' => 'setSaque',
        'troco' => 'setTroco',
        'juros' => 'setJuros',
        'multa' => 'setMulta',
        'desconto' => 'setDesconto',
        'abatimento' => 'setAbatimento'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'original' => 'getOriginal',
        'saque' => 'getSaque',
        'troco' => 'getTroco',
        'juros' => 'getJuros',
        'multa' => 'getMulta',
        'desconto' => 'getDesconto',
        'abatimento' => 'getAbatimento'
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
        $this->container['saque']      = $this->hasIndex('saque', $data);
        $this->container['troco']      = $this->hasIndex('troco', $data);
        $this->container['juros']      = $this->hasIndex('juros', $data);
        $this->container['multa']      = $this->hasIndex('multa', $data);
        $this->container['desconto']   = $this->hasIndex('desconto', $data);
        $this->container['abatimento'] = $this->hasIndex('abatimento', $data);
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
     * Gets original
     *
     * @return \DBSeller\SdkBancoItau\Model\ComponentesValorOriginal
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param \DBSeller\SdkBancoItau\Model\ComponentesValorOriginal $original original
     *
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets saque
     *
     * @return \DBSeller\SdkBancoItau\Model\SaqueCv
     */
    public function getSaque()
    {
        return $this->container['saque'];
    }

    /**
     * Sets saque
     *
     * @param \DBSeller\SdkBancoItau\Model\SaqueCv $saque saque
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
     * @return \DBSeller\SdkBancoItau\Model\TrocoCv
     */
    public function getTroco()
    {
        return $this->container['troco'];
    }

    /**
     * Sets troco
     *
     * @param \DBSeller\SdkBancoItau\Model\TrocoCv $troco troco
     *
     * @return $this
     */
    public function setTroco($troco)
    {
        $this->container['troco'] = $troco;

        return $this;
    }

    /**
     * Gets juros
     *
     * @return \DBSeller\SdkBancoItau\Model\ComponentesValorJuros
     */
    public function getJuros()
    {
        return $this->container['juros'];
    }

    /**
     * Sets juros
     *
     * @param \DBSeller\SdkBancoItau\Model\ComponentesValorJuros $juros juros
     *
     * @return $this
     */
    public function setJuros($juros)
    {
        $this->container['juros'] = $juros;

        return $this;
    }

    /**
     * Gets multa
     *
     * @return \DBSeller\SdkBancoItau\Model\ComponentesValorMulta
     */
    public function getMulta()
    {
        return $this->container['multa'];
    }

    /**
     * Sets multa
     *
     * @param \DBSeller\SdkBancoItau\Model\ComponentesValorMulta $multa multa
     *
     * @return $this
     */
    public function setMulta($multa)
    {
        $this->container['multa'] = $multa;

        return $this;
    }

    /**
     * Gets desconto
     *
     * @return \DBSeller\SdkBancoItau\Model\ComponentesValorDesconto
     */
    public function getDesconto()
    {
        return $this->container['desconto'];
    }

    /**
     * Sets desconto
     *
     * @param \DBSeller\SdkBancoItau\Model\ComponentesValorDesconto $desconto desconto
     *
     * @return $this
     */
    public function setDesconto($desconto)
    {
        $this->container['desconto'] = $desconto;

        return $this;
    }

    /**
     * Gets abatimento
     *
     * @return \DBSeller\SdkBancoItau\Model\ComponentesValorAbatimento
     */
    public function getAbatimento()
    {
        return $this->container['abatimento'];
    }

    /**
     * Sets abatimento
     *
     * @param \DBSeller\SdkBancoItau\Model\ComponentesValorAbatimento $abatimento abatimento
     *
     * @return $this
     */
    public function setAbatimento($abatimento)
    {
        $this->container['abatimento'] = $abatimento;

        return $this;
    }
}
