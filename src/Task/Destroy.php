<?php


namespace Tomeet\GeTui\Task;


use GuzzleHttp\Exception\GuzzleException;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Destroy
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
     * @example Push::task->destroy(task)
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-13
     */
    public function get($task): bool
    {
        $response = $this->request("/task/schedule/{$task}", 'DELETE');
        
        return $this->isSuccess($response);
    }
}
