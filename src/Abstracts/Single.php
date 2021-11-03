<?php

namespace Tomeet\GeTui\Abstracts;

use Tomeet\GeTui\Interfaces\PushInterface;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;
use Tomeet\GeTui\Traits\Payload;

abstract class Single implements PushInterface
{
    use HasRequest;
    use HasResponse;
    use Payload;
    
    abstract function submit();
}
