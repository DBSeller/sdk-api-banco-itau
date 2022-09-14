<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * ValorDesconto Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class ValorDesconto extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'valor_desconto';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'modalidade' => 'int',
        'valor_perc' => 'string',
        'desconto_data_fixa' => '\DBSeller\SdkBancoItau\Model\ValorDescontoDescontoDataFixa[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'modalidade' => null,
        'valor_perc' => null,
        'desconto_data_fixa' => null
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
        'valor_perc' => 'valorPerc',
        'desconto_data_fixa' => 'descontoDataFixa'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modalidade' => 'setModalidade',
        'valor_perc' => 'setValorPerc',
        'desconto_data_fixa' => 'setDescontoDataFixa'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modalidade' => 'getModalidade',
        'valor_perc' => 'getValorPerc',
        'desconto_data_fixa' => 'getDescontoDataFixa'
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
        $this->container['desconto_data_fixa'] = isset($data['desconto_data_fixa']) ?
            $data['desconto_data_fixa'] : null;
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
     * @param int $modalidade Modalidade de descontos
     * <table>
     *  <tr><td>Descrição</td><td>Dominio</td></tr>
     *  <tr><td>Valor Fixo até a[s] data[s] informada[s]</td><td>1</td></tr>
     *  <tr><td>Percentual até a data informada</td><td>2</td></tr>
     *  <tr><td>Valor por antecipação dia corrido</td><td>3</td></tr>
     *  <tr><td>Valor por antecipação dia útil</td><td>4</td></tr>
     *  <tr><td>Percentual por antecipação dia corrido</td><td>5</td></tr>
     *  <tr><td>Percentual por antecipação dia útil</td><td>6</td></tr>
     * </table>
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
     * @param string $valor_perc Abatimentos ou outras deduções aplicadas
     * ao documento, em valor absoluto ou percentual do valor original
     * do documento. (Não deve ser enviado valorPerc e descontoDataFixa juntos)
     *
     * @return $this
     */
    public function setValorPerc($valor_perc)
    {
        $this->container['valor_perc'] = $valor_perc;

        return $this;
    }

    /**
     * Gets desconto_data_fixa
     *
     * @return \DBSeller\SdkBancoItau\Model\ValorDescontoDescontoDataFixa[]
     */
    public function getDescontoDataFixa()
    {
        return $this->container['desconto_data_fixa'];
    }

    /**
     * Sets desconto_data_fixa
     *
     * @param \DBSeller\SdkBancoItau\Model\ValorDescontoDescontoDataFixa[] $desconto_data_fixa
     * Data limite para o desconto absoluto da cobrança. (A data de desconto obrigatoriamente
     * deverá ser menor que a data de vencimento da cobrança)
     *
     * @return $this
     */
    public function setDescontoDataFixa($desconto_data_fixa)
    {
        $this->container['desconto_data_fixa'] = $desconto_data_fixa;

        return $this;
    }
}
