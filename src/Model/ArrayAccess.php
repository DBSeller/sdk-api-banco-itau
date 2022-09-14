<?php

namespace DBSeller\SdkBancoItau\Model;

use DBSeller\SdkBancoItau\Interfaces\ArrayAccessInterface;
use DBSeller\SdkBancoItau\Traits\ArrayAccessTrait;

abstract class ArrayAccess implements ArrayAccessInterface
{
    use ArrayAccessTrait;
}
