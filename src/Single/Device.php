<?php


namespace Tomeet\GeTui\Single;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\Abstracts\Single;
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
 * @package Tomeet\GeTui\Single
 */
class Device extends Single
{
    /**
     * @throws GuzzleException
     * @example $broadcast =
     *          Push::single->device->audience->device(device)->title(title)->body(body)->extras(extras)->submit();
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-1
     */
    public function submit()
    {
        $response = $this->request('/push/single/cid', 'POST', [RequestOptions::JSON => $this->serialize()]);
        
        return $this->toArray($response);
    }
}
