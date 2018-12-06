<?php

namespace App;

abstract class Facade
{
    /**
     * Facade accessor. In this basic example it will return fully qualified
     * name of the class we're "resolving out of container"
     * (read instantiating in `__callStatic` below).
     *
     * @return string
     */
    abstract public static function getFacadeAccessor();

    /**
     * Simplified facades without container, just instantiating.
     *
     * @param  string  $method
     * @param  array  $arguments
     * @return mixed
     */
    public static function __callStatic($method, $arguments)
    {
        $className = static::getFacadeAccessor();

        return (new $className)->{$method}(...$arguments);
    }
}
