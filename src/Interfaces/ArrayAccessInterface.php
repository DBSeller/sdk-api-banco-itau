<?php

namespace DBSeller\SdkBancoItau\Interfaces;

interface ArrayAccessInterface
{
    public function offsetExists($offset);

    public function offsetGet($offset);

    public function offsetSet($offset, $value);

    public function offsetUnset($offset);
}
