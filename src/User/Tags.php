<?php


namespace Tomeet\GeTui\User;


use GuzzleHttp\Exception\GuzzleException;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Tags
{
    use HasRequest;
    use HasResponse;
    
    protected GeTui $app;
    
    public function __construct(GeTui $app)
    {
        $this->app = $app;
    }
    
    /**
     * @param $device
     *
     * @return array
     * @throws GuzzleException
     * @example Push::user->tags(device)
     * @link    https://docs.getui.com/getui/server/rest_v2/user/#doc-title-9
     */
    public function get($device): array
    {
        $response = $this->request("/user/custom_tag/cid/{$device}");
        
        return array_filter(explode(' ', $this->toArray($response, "{$device}.0")));
    }
}
