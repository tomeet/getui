<?php


namespace Tomeet\GeTui;

use Tomeet\GeTui\Group\Alias;
use Tomeet\GeTui\Group\Create;
use Tomeet\GeTui\Group\Device;
use Tomeet\GeTui\Traits\Bus;

/**
 * Class Group
 *
 * @property Create $create
 * @property Device $device
 * @property Alias  $alias
 * @package Tomeet\GeTui
 */
class Group
{
    use Bus;
    
    protected array $providers = [
        'create' => Create::class,
        'device' => Device::class,
        'alias'  => Alias::class,
    ];
    
}
