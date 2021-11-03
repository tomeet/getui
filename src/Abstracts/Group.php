<?php

namespace Tomeet\GeTui\Abstracts;

use Tomeet\GeTui\Interfaces\PushInterface;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;
use Tomeet\GeTui\Traits\Payload;

abstract class Group implements PushInterface
{
    use HasRequest;
    use HasResponse;
    use Payload;
    protected $options;
    
    abstract function submit();
    
    public function task($id): Group
    {
        $this->options['taskid'] = $id;
        
        return $this;
    }
    
    protected function getOptions()
    {
        return $this->options + $this->container['audience']->get();
    }
}
