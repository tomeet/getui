<?php


namespace Tomeet\GeTui\Alias;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Unbind
{
    use HasRequest;
    use HasResponse;
    
    protected GeTui $app;
    
    public function __construct(GeTui $app)
    {
        $this->app = $app;
    }
    
    /**
     * @param $input
     *
     * @return bool
     * @throws GuzzleException
     * @example  Push::alias->unbind([cid => alias])
     * @link     https://docs.getui.com/getui/server/rest_v2/user/#doc-title-5
     */
    public function get($input): bool
    {
        $data = [];
        
        if (func_num_args() === 2) {
            $input = [$input => func_get_arg(1)];
        }
        
        foreach ($input as $cid => $alias) {
            $data[] = compact('cid', 'alias');
        }
        
        $response = $this->request('/user/alias', 'delete', [RequestOptions::JSON => ['data_list' => $data]]);
        
        return $this->isSuccess($response);
    }
}
