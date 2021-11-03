<?php


namespace Tomeet\GeTui\Report;


use GuzzleHttp\Exception\GuzzleException;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class User
{
    use HasRequest;
    use HasResponse;
    
    protected GeTui $app;
    
    public function __construct(GeTui $app)
    {
        $this->app = $app;
    }
    
    /**
     * @return array
     * @throws GuzzleException
     * @example Push::report->user(2020-01-01)
     * @link    https://docs.getui.com/getui/server/rest_v2/report/#doc-title-5
     */
    public function get($date): array
    {
        $date     = $this->app->toDate($date);
        $response = $this->request("/report/user/date/{$date}");
        
        return $this->toArray($response, $date);
    }
}
