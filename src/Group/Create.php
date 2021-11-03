<?php


namespace Tomeet\GeTui\Group;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\Abstracts\Group;
use Tomeet\GeTui\Helper\Audience;
use Tomeet\GeTui\Helper\Channel;
use Tomeet\GeTui\Helper\Message;
use Tomeet\GeTui\Helper\Setting;

/**
 * Class Create
 *
 * @property Audience $audience
 * @property Message  $message
 * @property Channel  $channel
 * @property Setting  $setting
 * @package Tomeet\GeTui\Group
 */
class Create extends Group
{
    /**
     * @throws GuzzleException
     * @example Push::group->create->title('批量推')->body('批量推')->extras($extras)->submit();
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-5
     */
    public function submit()
    {
        $options = $this->serialize();
        
        unset($this->container['audience']);
        $response = $this->request('/push/list/message', 'POST', [RequestOptions::JSON => $options]);
        
        return $this->toArray($response, 'taskid');
    }
}
