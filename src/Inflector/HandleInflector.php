<?php namespace Cairns\Radiate\Inflector;

final class HandleInflector implements MethodInflector
{
    public function inflect($event, $listener)
    {
        return 'handle';
    }
}
