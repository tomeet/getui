<?php


namespace Tomeet\GeTui;


use Tomeet\GeTui\Task\Destroy;
use Tomeet\GeTui\Task\Progress;
use Tomeet\GeTui\Task\State;
use Tomeet\GeTui\Task\Stop;
use Tomeet\GeTui\Traits\Bus;

/**
 * Class Task
 *
 * @property Stop     $stop
 * @property State    $state
 * @property Destroy  $destroy
 * @property Progress $progress
 * @package Tomeet\GeTui
 */
class Task
{
    use Bus;
    
    protected array $providers = [
        'stop'     => Stop::class,
        'state'    => State::class,
        'destroy'  => Destroy::class,
        'progress' => Progress::class,
    ];
}
