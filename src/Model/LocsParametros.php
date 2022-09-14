<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * LocsParametros Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class LocsParametros extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'locs_parametros';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'inicio' => 'string',
        'fim' => 'string',
        'tx_id_presente' => 'bool',
        'tipo_cob' => 'string',
        'paginacao' => '\DBSeller\SdkBancoItau\Model\LocsParametrosPaginacao'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'inicio' => null,
        'fim' => null,
        'tx_id_presente' => null,
        'tipo_cob' => null,
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
        'tx_id_presente' => 'txIdPresente',
        'tipo_cob' => 'tipoCob',
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
        'tx_id_presente' => 'setTxIdPresente',
        'tipo_cob' => 'setTipoCob',
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
        'tx_id_presente' => 'getTxIdPresente',
        'tipo_cob' => 'getTipoCob',
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
        $this->container['tx_id_presente'] = isset($data['tx_id_presente']) ? $data['tx_id_presente'] : null;
        $this->container['tipo_cob'] = isset($data['tipo_cob']) ? $data['tipo_cob'] : null;
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
     * Gets tx_id_presente
     *
     * @return bool
     */
    public function getTxIdPresente()
    {
        return $this->container['tx_id_presente'];
    }

    /**
     * Sets tx_id_presente
     *
     * @param bool $tx_id_presente Filtro pela existência de txid.
     *
     * @return $this
     */
    public function setTxIdPresente($tx_id_presente)
    {
        $this->container['tx_id_presente'] = $tx_id_presente;

        return $this;
    }

    /**
     * Gets tipo_cob
     *
     * @return string
     */
    public function getTipoCob()
    {
        return $this->container['tipo_cob'];
    }

    /**
     * Sets tipo_cob
     *
     * @param string $tipo_cob Define se o tipo do documento é imediata ou vencimento <table><tr><td>ENUM</td></tr>
     * <tr><td>cob</td></tr><tr><td>cobv</td></tr></table>
     *
     * @return $this
     */
    public function setTipoCob($tipo_cob)
    {
        $this->container['tipo_cob'] = $tipo_cob;

        return $this;
    }

    /**
     * Gets paginacao
     *
     * @return \DBSeller\SdkBancoItau\Model\LocsParametrosPaginacao
     */
    public function getPaginacao()
    {
        return $this->container['paginacao'];
    }

    /**
     * Sets paginacao
     *
     * @param \DBSeller\SdkBancoItau\Model\LocsParametrosPaginacao $paginacao paginacao
     *
     * @return $this
     */
    public function setPaginacao($paginacao)
    {
        $this->container['paginacao'] = $paginacao;

        return $this;
    }
}
