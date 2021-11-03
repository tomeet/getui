<?php


namespace Tomeet\GeTui\User;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Tomeet\GeTui\GeTui;
use Tomeet\GeTui\Helper\Filter;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;

class Count
{
    use HasRequest;
    use HasResponse;
    
    protected GeTui $app;
    
    public function __construct(GeTui $app)
    {
        $this->app = $app;
    }
    
    /**
     * @param  Filter  $filter
     *
     * @return array
     * @throws GuzzleException
     * @example Push::user->count([[key,values[],opt_type])
     * @link    https://docs.getui.com/getui/server/rest_v2/user/#doc-title-15
     */
    public function get(Filter $filter): int
    {
        $response = $this->request(
            '/user/count',
            'post',
            [RequestOptions::JSON => ['tag' => $filter->toArray()]]);
        
        return $this->toArray($response, 'user_count');
    }
}
