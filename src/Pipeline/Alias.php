<?php


namespace Tomeet\GeTui\Pipeline;


use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\Abstracts\Pipeline;
use Tomeet\GeTui\Helper\Audience;
use Tomeet\GeTui\Helper\Channel;
use Tomeet\GeTui\Helper\Message;
use Tomeet\GeTui\Helper\Setting;

/**
 * Class Alias
 *
 * @property Audience $audience
 * @property Message  $message
 * @property Channel  $channel
 * @property Setting  $setting
 * @package Tomeet\GeTui\Pipeline
 */
class Alias extends Pipeline
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *          $push = Push::pipeline->alias;
     *           for ($index = 0; $index < 100; ++$index) {
     *                  $push->audience(alias)
     *                  ->title(title)
     *                  ->body(body)
     *                  ->extras(extras)
     *                  ->delay();
     *           }
     *           $push->submit();
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-4
     */
    public function submit()
    {
        if ($this->options !== null) {
            $options['msg_list'] = $this->options;
        } else {
            $options = $this->serialize();
        }
        
        $response = $this->request('/push/single/batch/cid', 'POST', [RequestOptions::JSON => $options]);
        
        return $this->toArray($response);
    }
}
