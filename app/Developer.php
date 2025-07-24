<?php

namespace App;

class Developer extends Worker
{
    use HasRest;
    protected string $position = 'developer';

    
    public function work()
    {
        // TODO: Implement work() method.
    }

    public function rest()
    {
        // TODO: Implement rest() method.
    }

    public function getName()
    {
    }
}