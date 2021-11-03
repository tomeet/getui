<?php


namespace Tomeet\GeTui\Single;


use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\Helper\Audience;
use Tomeet\GeTui\Helper\Channel;
use Tomeet\GeTui\Helper\Message;
use Tomeet\GeTui\Helper\Setting;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;
use Tomeet\GeTui\Traits\Payload;

/**
 * Class Alias
 *
 * @property Audience $audience
 * @property Message  $message
 * @property Channel  $channel
 * @property Setting  $setting
 * @package Tomeet\GeTui\Single
 */
class Alias
{
    use HasRequest;
    use HasResponse;
    use Payload;
    
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @example $broadcast =
     *          Push::single->alias->audience->device(device)->title(title)->body(body)->extras(extras)->submit();
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-2
     */
    public function submit()
    {
        $response = $this->request('push/single/alias', 'POST', [RequestOptions::JSON => $this->serialize()]);
        
        return $this->toArray($response);
    }
}
