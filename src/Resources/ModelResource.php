<?php

namespace DBSeller\SdkBancoItau\Resources;

use DBSeller\SdkBancoItau\Model\ArrayAccess;
use DBSeller\SdkBancoItau\Resources\ObjectSerializerResource as ObjectSerializer;

class ModelResource extends ArrayAccess
{
    protected function hasIndex($index, &$data, $defaultValue = null)
    {
        return isset($data[$index]) ? $data[$index] : $defaultValue;
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
