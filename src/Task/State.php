<?php


namespace Tomeet\GeTui\Task;


use GuzzleHttp\Exception\GuzzleException;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class State
{
    use HasRequest;
    use HasResponse;
    
    protected GeTui $app;
    
    public function __construct(GeTui $app)
    {
        $this->app = $app;
    }
    
    /**
     * @param $task
     *
     * @return array
     * @throws GuzzleException
     * @example Push::task->state(task)
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-12
     */
    public function get($task): array
    {
        $response = $this->request("/task/schedule/{$task}");
        
        return $this->toArray($response);
    }
}
