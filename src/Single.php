<?php


namespace Tomeet\GeTui;


use Tomeet\GeTui\Single\Alias;
use Tomeet\GeTui\Single\Device;
use Tomeet\GeTui\Traits\Bus;

/**
 * Class Single
 *
 * @property Device $device
 * @property Alias  $alias
 * @package Tomeet\GeTui
 */
class Single
{
    use Bus;
    
    protected array $providers = [
        'device' => Device::class,
        'alias'  => Alias::class,
    ];
}
