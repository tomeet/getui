<?php


namespace Tomeet\GeTui;

use Tomeet\GeTui\Pipeline\Alias;
use Tomeet\GeTui\Pipeline\Device;
use Tomeet\GeTui\Traits\Bus;

/**
 * Class Pipeline
 *
 * @property Device $device
 * @property Alias  $alias
 * @package Tomeet\GeTui
 */
class Pipeline
{
    use Bus;
    
    protected array $providers = [
        'device' => Device::class,
        'alias'  => Alias::class,
    ];
}
