<?php


namespace Tomeet\GeTui\Broadcast;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\Abstracts\Broadcast;
use Tomeet\GeTui\Helper\Audience;
use Tomeet\GeTui\Helper\Channel;
use Tomeet\GeTui\Helper\Message;
use Tomeet\GeTui\Helper\Setting;

/**
 * Class Filter
 *
 * @property Audience $audience
 * @property Message  $message
 * @property Channel  $channel
 * @property Setting  $setting
 * @package Tomeet\GeTui\Broadcast
 */
class Filter extends Broadcast
{
    /**
     * @throws GuzzleException
     * @example
     *          $filter = (new
     *          Filter())->wherePhone()->whereOrRegion()->whereNotTag()->wherePortrait()->wherePortrait();
     *          $broadcast =
     *          Push::broadcast->filter->audience($filter,
     *          'filter')->extras($extras)->title($title)->body($body)->submit($filter);
     * @link    https://docs.getui.com/getui/server/rest_v2/push/#doc-title-9
     */
    public function submit()
    {
        $response = $this->request('/push/tag', 'POST', [RequestOptions::JSON => $this->serialize()]);
        
        return $this->toArray($response, 'taskid');
    }
}
