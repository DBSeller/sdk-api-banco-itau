<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * LoteCobrancaVencimentoPatchRequestCobsv Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class LoteCobrancaVencimentoPatchRequestCobsv extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'loteCobrancaVencimentoPatchRequest_cobsv';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'status' => 'string',
        'devedor' => '\DBSeller\SdkBancoItau\Model\Devedor',
        'valor' => '\DBSeller\SdkBancoItau\Model\Valor',
        'loc' => '\DBSeller\SdkBancoItau\Model\CobrancaVencimentoPatchRequestLoc',
        'chave' => 'string',
        'solicitacao_pagador' => 'string',
        'txid' => 'string',
        'calendario' => '\DBSeller\SdkBancoItau\Model\LoteCobrancaVencimentoPutRequestCalendario',
        'info_adicionais' => '\DBSeller\SdkBancoItau\Model\InformacaoAdicional[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'status' => null,
        'devedor' => null,
        'valor' => null,
        'loc' => null,
        'chave' => null,
        'solicitacao_pagador' => null,
        'txid' => null,
        'calendario' => null,
        'info_adicionais' => null
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
        'status' => 'status',
        'devedor' => 'devedor',
        'valor' => 'valor',
        'loc' => 'loc',
        'chave' => 'chave',
        'solicitacao_pagador' => 'solicitacaoPagador',
        'txid' => 'txid',
        'calendario' => 'calendario',
        'info_adicionais' => 'infoAdicionais'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'devedor' => 'setDevedor',
        'valor' => 'setValor',
        'loc' => 'setLoc',
        'chave' => 'setChave',
        'solicitacao_pagador' => 'setSolicitacaoPagador',
        'txid' => 'setTxid',
        'calendario' => 'setCalendario',
        'info_adicionais' => 'setInfoAdicionais'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'devedor' => 'getDevedor',
        'valor' => 'getValor',
        'loc' => 'getLoc',
        'chave' => 'getChave',
        'solicitacao_pagador' => 'getSolicitacaoPagador',
        'txid' => 'getTxid',
        'calendario' => 'getCalendario',
        'info_adicionais' => 'getInfoAdicionais'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['devedor'] = isset($data['devedor']) ? $data['devedor'] : null;
        $this->container['valor'] = isset($data['valor']) ? $data['valor'] : null;
        $this->container['loc'] = isset($data['loc']) ? $data['loc'] : null;
        $this->container['chave'] = isset($data['chave']) ? $data['chave'] : null;
        $this->container['solicitacao_pagador'] = isset($data['solicitacao_pagador']) ?
            $data['solicitacao_pagador'] : null;
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['calendario'] = isset($data['calendario']) ? $data['calendario'] : null;
        $this->container['info_adicionais'] = isset($data['info_adicionais']) ? $data['info_adicionais'] : null;
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
     * @param string $status Status da cobrança. <table><tr><td>ENUM</td></tr>
     * <tr><td>REMOVIDA_PELO_USUARIO_RECEBEDOR</td></tr></table>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets devedor
     *
     * @return \DBSeller\SdkBancoItau\Model\Devedor
     */
    public function getDevedor()
    {
        return $this->container['devedor'];
    }

    /**
     * Sets devedor
     *
     * @param \DBSeller\SdkBancoItau\Model\Devedor $devedor devedor
     *
     * @return $this
     */
    public function setDevedor($devedor)
    {
        $this->container['devedor'] = $devedor;

        return $this;
    }

    /**
     * Gets valor
     *
     * @return \DBSeller\SdkBancoItau\Model\Valor
     */
    public function getValor()
    {
        return $this->container['valor'];
    }

    /**
     * Sets valor
     *
     * @param \DBSeller\SdkBancoItau\Model\Valor $valor valor
     *
     * @return $this
     */
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;

        return $this;
    }

    /**
     * Gets loc
     *
     * @return \DBSeller\SdkBancoItau\Model\CobrancaVencimentoPatchRequestLoc
     */
    public function getLoc()
    {
        return $this->container['loc'];
    }

    /**
     * Sets loc
     *
     * @param \DBSeller\SdkBancoItau\Model\CobrancaVencimentoPatchRequestLoc $loc loc
     *
     * @return $this
     */
    public function setLoc($loc)
    {
        $this->container['loc'] = $loc;

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
     * Gets solicitacao_pagador
     *
     * @return string
     */
    public function getSolicitacaoPagador()
    {
        return $this->container['solicitacao_pagador'];
    }

    /**
     * Sets solicitacao_pagador
     *
     * @param string $solicitacao_pagador O campo solicitacaoPagador, determina um texto a ser apresentado ao pagador
     * para que ele possa digitar uma informação correlata, em formato livre, a ser enviada ao recebedor
     *
     * @return $this
     */
    public function setSolicitacaoPagador($solicitacao_pagador)
    {
        $this->container['solicitacao_pagador'] = $solicitacao_pagador;

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
     * @param string $txid O campo txid determina o identificador da transação.
     * O objetivo desse campo é ser um elemento que possibilite a conciliação de
     * pagamentos. O txid é criado exclusivamente pelo usuário recebedor e está
     * sob sua responsabilidade. Deve ser único por CNPJ do recebedor. Para Code
     * dinâmico o campo deve possuir de 26 posição até 35 posições. Os caracteres
     * permitidos no contexto do Pix para o campo txId são: Letras minúsculas, de
     * ‘a’ a ‘z’, Letras maiúsculas, de ‘A’ a ‘Z’, Dígitos decimais, de ‘0’ a ‘9’
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets calendario
     *
     * @return \DBSeller\SdkBancoItau\Model\LoteCobrancaVencimentoPutRequestCalendario
     */
    public function getCalendario()
    {
        return $this->container['calendario'];
    }

    /**
     * Sets calendario
     *
     * @param \DBSeller\SdkBancoItau\Model\LoteCobrancaVencimentoPutRequestCalendario $calendario calendario
     *
     * @return $this
     */
    public function setCalendario($calendario)
    {
        $this->container['calendario'] = $calendario;

        return $this;
    }

    /**
     * Gets info_adicionais
     *
     * @return \DBSeller\SdkBancoItau\Model\InformacaoAdicional[]
     */
    public function getInfoAdicionais()
    {
        return $this->container['info_adicionais'];
    }

    /**
     * Sets info_adicionais
     *
     * @param \DBSeller\SdkBancoItau\Model\InformacaoAdicional[] $info_adicionais Cada respectiva informação
     * adicional contida na lista (nome e valor) deve ser apresentada ao pagador
     *
     * @return $this
     */
    public function setInfoAdicionais($info_adicionais)
    {
        $this->container['info_adicionais'] = $info_adicionais;

        return $this;
    }
}
