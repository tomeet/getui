<?php


namespace Tomeet\GeTui;


use Tomeet\GeTui\Broadcast\All;
use Tomeet\GeTui\Broadcast\Filter;
use Tomeet\GeTui\Broadcast\Tags;
use Tomeet\GeTui\Traits\Bus;

/**
 * Class Broadcast
 *
 * @property All    $all    对指定应用的所有用户群发推送消息。支持定时、定速功能，查询任务推送情况请见接口查询定时任务。
 * @property Tags   $tags   对指定应用的符合筛选条件的用户群发推送消息。支持定时、定速功能。
 * @property Filter $filter 根据标签过滤用户并推送。支持定时、定速功能。
 * @package Tomeet\GeTui
 */
class Broadcast
{
    use Bus;
    
    protected array $providers = [
        'all'    => All::class,    // 对指定应用的所有用户群发推送消息。支持定时、定速功能，查询任务推送情况请见接口查询定时任务。
        'filter' => Filter::class,  // 对指定应用的符合筛选条件的用户群发推送消息。支持定时、定速功能。
        'tags'   => Tags::class,  // 根据标签过滤用户并推送。支持定时、定速功能。
    ];
}
