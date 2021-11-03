<?php


namespace Tomeet\GeTui\Broadcast;


use Tomeet\GeTui\Helper\Audience;
use Tomeet\GeTui\Helper\Channel;
use Tomeet\GeTui\Helper\Message;
use Tomeet\GeTui\Helper\Setting;
use Tomeet\GeTui\Traits\HasRequest;use Tomeet\GeTui\Traits\HasResponse;
use Tomeet\GeTui\Traits\Payload;
use GuzzleHttp\RequestOptions;

/**
 * Class All
 * @property Audience $audience
 * @property Message  $message
 * @property Channel  $channel
 * @property Setting  $setting
 * @package Tomeet\GeTui\Broadcast
 */
class All
{
    use HasRequest;use HasResponse;
    use Payload;
    
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @example $broadcast = Push::broadcast->all->extras($extras)->title($title)->body($body)->submit();
     * @link    https://docs.getui.com/getui/server/rest_v2/push/#doc-title-8
     */
    public function submit()
    {
        $this->audience->all();
        $response = $this->request('/push/all', 'POST', [RequestOptions::JSON => $this->serialize()]);
        
        return $this->toArray($response, 'taskid');
    }
}
