<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ModelInterface;
use DBSeller\SdkBancoItau\Resources\ModelResource;

/**
 * Qrcode Class Doc Comment
 *
 * @category Model
 * @package  DBSeller\SdkBancoItau\Model
 * @author   DB Seller
 */
class Qrcode extends ModelResource implements ModelInterface
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'qrcode';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'pix_link' => 'string',
        'emv' => 'string',
        'imagem_base64' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'pix_link' => null,
        'emv' => null,
        'imagem_base64' => null
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
        'pix_link' => 'pix_link',
        'emv' => 'emv',
        'imagem_base64' => 'imagem_base64'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pix_link' => 'setPixLink',
        'emv' => 'setEmv',
        'imagem_base64' => 'setImagemBase64'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pix_link' => 'getPixLink',
        'emv' => 'getEmv',
        'imagem_base64' => 'getImagemBase64'
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
        $this->container['pix_link'] = isset($data['pix_link']) ? $data['pix_link'] : null;
        $this->container['emv'] = isset($data['emv']) ? $data['emv'] : null;
        $this->container['imagem_base64'] = isset($data['imagem_base64']) ? $data['imagem_base64'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pix_link'] === null) {
            $invalidProperties[] = "'pix_link' can't be null";
        }
        if ($this->container['emv'] === null) {
            $invalidProperties[] = "'emv' can't be null";
        }
        if ($this->container['imagem_base64'] === null) {
            $invalidProperties[] = "'imagem_base64' can't be null";
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
     * Gets pix_link
     *
     * @return string
     */
    public function getPixLink()
    {
        return $this->container['pix_link'];
    }

    /**
     * Sets pix_link
     *
     * @param string $pix_link URL do PIX para consulta do payload criptografado - Pix Link BACEN
     *
     * @return $this
     */
    public function setPixLink($pix_link)
    {
        $this->container['pix_link'] = $pix_link;

        return $this;
    }

    /**
     * Gets emv
     *
     * @return string
     */
    public function getEmv()
    {
        return $this->container['emv'];
    }

    /**
     * Sets emv
     *
     * @param string $emv Texto do QR CODE no padrao EMVco
     *
     * @return $this
     */
    public function setEmv($emv)
    {
        $this->container['emv'] = $emv;

        return $this;
    }

    /**
     * Gets imagem_base64
     *
     * @return string
     */
    public function getImagemBase64()
    {
        return $this->container['imagem_base64'];
    }

    /**
     * Sets imagem_base64
     *
     * @param string $imagem_base64 Imagem em base64 do QRCODE PIX
     *
     * @return $this
     */
    public function setImagemBase64($imagem_base64)
    {
        $this->container['imagem_base64'] = $imagem_base64;

        return $this;
    }
}
