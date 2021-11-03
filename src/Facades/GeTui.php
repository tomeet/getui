<?php

namespace Tomeet\GeTui\Facades;

use Tomeet\GeTui\Alias;
use Tomeet\GeTui\Broadcast;
use Tomeet\GeTui\Group;
use Tomeet\GeTui\Helper\Audience;
use Tomeet\GeTui\Helper\Channel;
use Tomeet\GeTui\Helper\Message;
use Tomeet\GeTui\Pipeline;
use Tomeet\GeTui\Report;
use Tomeet\GeTui\Single;
use Tomeet\GeTui\Tags;
use Tomeet\GeTui\Task;
use Tomeet\GeTui\User;
use Illuminate\Support\Facades\Facade;

/**
 * Class GeTui
 *
 * @property-read Alias    $alias     别名相关
 * @property-read Tags      $tags      标签相关
 * @property-read User      $user      用户相关
 * @property-read Report    $report    统计相关
 * @property-read Broadcast $broadcast 针对指定应用推送
 * @property-read Task      $task      任务
 * @property-read Group     $group     针对list推送
 * @property-read Single    $single    针对单个用户推送
 * @property-read Pipeline  $pipeline  针对多个用户推送
 * @method Message message() 获得 Message 对象
 * @method Channel channel() 获得 Channel 对象
 * @method Audience audience() 获得 Audience 对象
 * @package Tomeet\GeTui\Facades
 */
class GeTui extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'getui';
    }
}
