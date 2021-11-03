<?php


namespace HaiXin\GeTui\Pipeline;


use GuzzleHttp\RequestOptions;
use HaiXin\GeTui\Abstracts\Pipeline;
use HaiXin\GeTui\Helper\Audience;
use HaiXin\GeTui\Helper\Channel;
use HaiXin\GeTui\Helper\Message;
use HaiXin\GeTui\Helper\Setting;

/**
 * Class Alias
 *
 * @property Audience $audience
 * @property Message  $message
 * @property Channel  $channel
 * @property Setting  $setting
 * @package HaiXin\GeTui\Pipeline
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
