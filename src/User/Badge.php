<?php


namespace Tomeet\GeTui\User;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Badge
{
    use HasRequest;
    use HasResponse;
    
    protected GeTui $app;
    
    public function __construct(GeTui $app)
    {
        $this->app = $app;
    }
    
    /**
     * @param         $badge
     * @param  array  $devices
     *
     * @return bool
     * @throws GuzzleException
     * @example Push::user->badge(badge, [device,device,device])
     * @link    https://docs.getui.com/getui/server/rest_v2/user/#doc-title-14
     */
    public function get($badge, array $devices): bool
    {
        $response = $this->request(
            sprintf('/user/badge/cid/%s', implode(',', array_unique($devices))),
            'post',
            [RequestOptions::JSON => ['badge' => $badge]]);
        
        return $this->isSuccess($response);
    }
}
