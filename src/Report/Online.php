<?php


namespace Tomeet\GeTui\Report;


use GuzzleHttp\Exception\GuzzleException;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Online
{
    use HasRequest;
    use HasResponse;
    
    protected GeTui $app;
    
    public function __construct(GeTui $app)
    {
        $this->app = $app;
    }
    
    /**
     * @return bool
     * @throws GuzzleException
     * @example Push::report->online()
     * @link    https://docs.getui.com/getui/server/rest_v2/report/#doc-title-6
     */
    public function get(): array
    {
        $response = $this->request('/report/online_user');
        
        return $this->toArray($response);
    }
}
