<?php

namespace Tomeet\GeTui\Abstracts;

use Tomeet\GeTui\Interfaces\PushInterface;
use Tomeet\GeTui\Traits\HasRequest;
use Tomeet\GeTui\Traits\HasResponse;
use Tomeet\GeTui\Traits\Payload;

abstract class Pipeline implements PushInterface
{
    use HasRequest;
    use HasResponse;
    use Payload;
    
    protected $options;
    
    public function delay(): self
    {
        $this->options[] = $this->serialize();
        
        return $this;
    }
    
    abstract function submit();
    
    protected function options(): array
    {
        if ($this->options !== null) {
            $options['msg_list'] = $this->options;
        } else {
            $options = $this->serialize();
        }
        
        return $options;
    }
}
