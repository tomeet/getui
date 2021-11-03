<?php


namespace Tomeet\GeTui\Report;


use GuzzleHttp\Exception\GuzzleException;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Group
{
    use HasRequest;
    use HasResponse;
    
    protected GeTui $app;
    
    public function __construct(GeTui $app)
    {
        $this->app = $app;
    }
    
    /**
     * @param $group
     *
     * @return array
     * @throws GuzzleException
     * @example Push::report->group(group)
     * @link    https://docs.getui.com/getui/server/rest_v2/report/#doc-title-2
     */
    public function get($group): array
    {
        $response = $this->request("/report/push/task_group/{$group}");
        
        return $this->toArray($response);
    }
}
