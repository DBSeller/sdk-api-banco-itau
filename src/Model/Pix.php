<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * Pix Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class Pix extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'pix';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'end_to_end_id' => 'string',
        'txid' => 'string',
        'valor' => 'string',
        'componentes_valor' => '\DBSeller\SdkBancoItau\Model\ComponentesValor[]',
        'chave' => 'string',
        'horario' => 'string',
        'info_pagador' => 'string',
        'devolucoes' => '\DBSeller\SdkBancoItau\Model\Devolucao[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'end_to_end_id' => null,
        'txid' => null,
        'valor' => null,
        'componentes_valor' => null,
        'chave' => null,
        'horario' => null,
        'info_pagador' => null,
        'devolucoes' => null
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
        'end_to_end_id' => 'endToEndId',
        'txid' => 'txid',
        'valor' => 'valor',
        'componentes_valor' => 'componentesValor',
        'chave' => 'chave',
        'horario' => 'horario',
        'info_pagador' => 'infoPagador',
        'devolucoes' => 'devolucoes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_to_end_id' => 'setEndToEndId',
        'txid' => 'setTxid',
        'valor' => 'setValor',
        'componentes_valor' => 'setComponentesValor',
        'chave' => 'setChave',
        'horario' => 'setHorario',
        'info_pagador' => 'setInfoPagador',
        'devolucoes' => 'setDevolucoes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_to_end_id' => 'getEndToEndId',
        'txid' => 'getTxid',
        'valor' => 'getValor',
        'componentes_valor' => 'getComponentesValor',
        'chave' => 'getChave',
        'horario' => 'getHorario',
        'info_pagador' => 'getInfoPagador',
        'devolucoes' => 'getDevolucoes'
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
        $this->container['end_to_end_id'] = isset($data['end_to_end_id']) ? $data['end_to_end_id'] : null;
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['valor'] = isset($data['valor']) ? $data['valor'] : null;
        $this->container['componentes_valor'] = isset($data['componentes_valor']) ? $data['componentes_valor'] : null;
        $this->container['chave'] = isset($data['chave']) ? $data['chave'] : null;
        $this->container['horario'] = isset($data['horario']) ? $data['horario'] : null;
        $this->container['info_pagador'] = isset($data['info_pagador']) ? $data['info_pagador'] : null;
        $this->container['devolucoes'] = isset($data['devolucoes']) ? $data['devolucoes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['end_to_end_id'] === null) {
            $invalidProperties[] = "'end_to_end_id' can't be null";
        }
        if ($this->container['valor'] === null) {
            $invalidProperties[] = "'valor' can't be null";
        }
        if ($this->container['chave'] === null) {
            $invalidProperties[] = "'chave' can't be null";
        }
        if ($this->container['horario'] === null) {
            $invalidProperties[] = "'horario' can't be null";
        }
        if ($this->container['info_pagador'] === null) {
            $invalidProperties[] = "'info_pagador' can't be null";
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
     * Gets end_to_end_id
     *
     * @return string
     */
    public function getEndToEndId()
    {
        return $this->container['end_to_end_id'];
    }

    /**
     * Sets end_to_end_id
     *
     * @param string $end_to_end_id Id fim a fim da transação. Esse campo é o \"id do pagamento\".
     * Transita nas mensagens de recebimento dos QR Codes e transferências.
     *
     * @return $this
     */
    public function setEndToEndId($end_to_end_id)
    {
        $this->container['end_to_end_id'] = $end_to_end_id;

        return $this;
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
     * transação. O objetivo desse campo é ser um elementoque possibilite
     * a conciliação de pagamentos. O txid é criado exclusivamente pelo
     * usuário recebedor e está sob sua responsabilidade. Deve ser único
     * por CNPJ do recebedor. Para Code dinâmico o campo deve possuir de
     * 26 posição até 35 posições. Os caracteres permitidos no contexto do
     * Pix para o campo txId são: Letras minúsculas, de ‘a’ a ‘z’, Letras
     * maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

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
     * @param string $valor Valor do pagamento.
     *
     * @return $this
     */
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;

        return $this;
    }

    /**
     * Gets componentes_valor
     *
     * @return \DBSeller\SdkBancoItau\Model\ComponentesValor[]
     */
    public function getComponentesValor()
    {
        return $this->container['componentes_valor'];
    }

    /**
     * Sets componentes_valor
     *
     * @param \DBSeller\SdkBancoItau\Model\ComponentesValor[] $componentes_valor
     * O objetivo dessa estrutura é explicar os elementos de composição do
     * valor do Pix, incluindo informações sobre as multas, juros, descontos
     * e abatimentos quando o Pix for relativo a cobranças com vencimento.
     *
     * @return $this
     */
    public function setComponentesValor($componentes_valor)
    {
        $this->container['componentes_valor'] = $componentes_valor;

        return $this;
    }

    /**
     * Gets chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->container['chave'];
    }

    /**
     * Sets chave
     *
     * @param string $chave Chave DICT do recebedor
     *
     * @return $this
     */
    public function setChave($chave)
    {
        $this->container['chave'] = $chave;

        return $this;
    }

    /**
     * Gets horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->container['horario'];
    }

    /**
     * Sets horario
     *
     * @param string $horario Horário do pagamento.
     *
     * @return $this
     */
    public function setHorario($horario)
    {
        $this->container['horario'] = $horario;

        return $this;
    }

    /**
     * Gets info_pagador
     *
     * @return string
     */
    public function getInfoPagador()
    {
        return $this->container['info_pagador'];
    }

    /**
     * Sets info_pagador
     *
     * @param string $info_pagador Informação livre do pagador.
     *
     * @return $this
     */
    public function setInfoPagador($info_pagador)
    {
        $this->container['info_pagador'] = $info_pagador;

        return $this;
    }

    /**
     * Gets devolucoes
     *
     * @return \DBSeller\SdkBancoItau\Model\Devolucao[]
     */
    public function getDevolucoes()
    {
        return $this->container['devolucoes'];
    }

    /**
     * Sets devolucoes
     *
     * @param \DBSeller\SdkBancoItau\Model\Devolucao[] $devolucoes Devolucoes registradas no documento
     *
     * @return $this
     */
    public function setDevolucoes($devolucoes)
    {
        $this->container['devolucoes'] = $devolucoes;

        return $this;
    }
}
