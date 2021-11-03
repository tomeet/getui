<?php


namespace Tomeet\GeTui\Task;


use GuzzleHttp\Exception\GuzzleException;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Stop
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
     * @return bool
     * @throws GuzzleException
     * @example Push::task->stop(task)
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-11
     */
    public function get($task): bool
    {
        $response = $this->request("/task/{$task}", 'DELETE');
        
        return $this->isSuccess($response);
    }
}
