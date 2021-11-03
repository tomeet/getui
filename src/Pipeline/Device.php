<?php


namespace Tomeet\GeTui\Pipeline;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\Abstracts\Pipeline;
use Tomeet\GeTui\Helper\Audience;
use Tomeet\GeTui\Helper\Channel;
use Tomeet\GeTui\Helper\Message;
use Tomeet\GeTui\Helper\Setting;

/**
 * Class Device
 *
 * @property Audience $audience
 * @property Message  $message
 * @property Channel  $channel
 * @property Setting  $setting
 * @package Tomeet\GeTui\Pipeline
 */
class Device extends Pipeline
{
    /**
     * @throws GuzzleException
     * @example
     *          $push = Push::pipeline->device;
     *           for ($index = 0; $index < 100; ++$index) {
     *                  $push->audience(device)
     *                  ->title(title)
     *                  ->body(body)
     *                  ->extras(extras)
     *                  ->delay();
     *           }
     *           $push->submit();
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-3
     */
    public function submit()
    {
        $options  = $this->options();
        $response = $this->request('/push/single/batch/cid', 'POST', [RequestOptions::JSON => $options]);
        
        return $this->toArray($response);
    }
    
}
