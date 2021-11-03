<?php


namespace Tomeet\GeTui;


use Tomeet\GeTui\Helper\Filter;
use Tomeet\GeTui\Traits\Bus;
use Tomeet\GeTui\User\Badge;
use Tomeet\GeTui\User\Black;
use Tomeet\GeTui\User\Count;
use Tomeet\GeTui\User\Detail;
use Tomeet\GeTui\User\State;
use Tomeet\GeTui\User\Tags;
use Tomeet\GeTui\User\Unblack;


/**
 * Class User
 * @method array count(Filter $filter) 用户总数
 * @method array detail(array $devices) 用户详情
 * @method array state(array $devices) 用户状态
 * @method array black(array $devices) 加黑名单
 * @method bool unblack(array $devices) 移除黑名单
 * @method array tags(string $device) 根据cid查询用户标签列表
 * @method array badge(int $badge, array $devices) 通过cid通知个推服务器当前iOS设备的角标情况
 *
 * @package Tomeet\GeTui
 */
class User
{
    use Bus;
    
    protected $providers = [
        'count'   => Count::class,     // 用户总数
        'detail'  => Detail::class,    // 用户详情
        'state'   => State::class,     // 用户状态
        'black'   => Black::class,     // 加黑名单
        'unblack' => Unblack::class,   // 移除黑名单
        'tags'    => Tags::class,      // 根据cid查询用户标签列表
        'badge'   => Badge::class,     // 通过cid通知个推服务器当前iOS设备的角标情况。
    ];
    
    
}
