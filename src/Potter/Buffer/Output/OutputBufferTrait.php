<?php

declare(strict_types=1);

namespace Potter\Buffer\Output;

trait OutputBufferTrait 
{
    final public function clean(): void
    {
        ob_clean();
    }
    
    final public function flush(): void
    {
        ob_flush();
    }
    
    final public function getContents(): string
    {
        return ob_get_contents();
    }
    
    final public function getLength(): int
    {
        return ob_get_length();
    }
    
    final public function start(): void
    {
        ob_start();
    }
}