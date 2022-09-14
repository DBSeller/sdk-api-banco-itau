<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * CobrancaVencimento Class
 *
 * @category Model
 * @package  DBSeller\ApiPixItau
 * @author   DBSeller
 */
class CobrancaVencimento extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'cobrancaVencimento';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'txid' => 'string',
        'status' => 'string',
        'criacao' => 'string',
        'problema' => '\DBSeller\SdkBancoItau\Model\Problema'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'txid' => null,
        'status' => null,
        'criacao' => null,
        'problema' => null
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
        'txid' => 'txid',
        'status' => 'status',
        'criacao' => 'criacao',
        'problema' => 'problema'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'txid' => 'setTxid',
        'status' => 'setStatus',
        'criacao' => 'setCriacao',
        'problema' => 'setProblema'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'txid' => 'getTxid',
        'status' => 'getStatus',
        'criacao' => 'getCriacao',
        'problema' => 'getProblema'
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
        $this->container['txid']     = $this->hasIndex('txid', $data);
        $this->container['status']   = $this->hasIndex('status', $data);
        $this->container['criacao']  = $this->hasIndex('criacao', $data);
        $this->container['problema'] = $this->hasIndex('problema', $data);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['txid'] === null) {
            $invalidProperties[] = "'txid' can't be null";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets txid
     *
     * @return string
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string $txid O campo txid determina o identificador da
     * transação. O objetivo desse campo é ser um elemento que possibilite
     * a conciliação de pagamentos. O txid é criado exclusivamente pelo
     * usuário recebedor e está sob sua responsabilidade. Deve ser único
     * por CNPJ do recebedor. Para Code dinâmico o campo deve possuir de 26
     * posição até 35 posições. Os caracteres permitidos no contexto do Pix
     * para o campo txId são: Letras minúsculas, de ‘a’ a ‘z’, Letras maiúsculas,
     * de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status da solicitação de criação/alteração
     * da cobrança no contexto de criação via lote
     * <table>
     *  <tr><td>ENUM</td></tr>
     *  <tr><td>EM_PROCESSAMENTO</td></tr>
     *  <tr><td>CRIADA</td></tr>
     *  <tr><td>NEGADA</td></tr>
     * </table>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets criacao
     *
     * @return string
     */
    public function getCriacao()
    {
        return $this->container['criacao'];
    }

    /**
     * Sets criacao
     *
     * @param string $criacao Data e hora em que a cobrança foi criada. Respeita RFC 3339.
     *
     * @return $this
     */
    public function setCriacao($criacao)
    {
        $this->container['criacao'] = $criacao;

        return $this;
    }

    /**
     * Gets problema
     *
     * @return \DBSeller\SdkBancoItau\Model\Problema
     */
    public function getProblema()
    {
        return $this->container['problema'];
    }

    /**
     * Sets problema
     *
     * @param \DBSeller\SdkBancoItau\Model\Problema $problema problema
     *
     * @return $this
     */
    public function setProblema($problema)
    {
        $this->container['problema'] = $problema;

        return $this;
    }
}
