<?php


namespace Tomeet\GeTui\Task;


use GuzzleHttp\Exception\GuzzleException;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Progress
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
     * @param $task
     *
     * @return array
     * @throws GuzzleException
     * @example Push::task->progress(device, task)
     * @link    https://docs.getui.com/getui/server/rest_v2/push/?id=doc-title-8#doc-title-14
     */
    public function get($device, $task): array
    {
        $response = $this->request("/task/detail/{$device}/{$task}");
        
        return $this->toArray($response, 'deatil');
    }
}
