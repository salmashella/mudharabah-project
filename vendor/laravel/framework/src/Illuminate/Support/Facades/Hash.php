<?php

namespace Illuminate\Support\Facades;

/**
 * @see \Illuminate\Hashing\BcryptHasher
 */
class Hash extends Facade
{
    public static function make($input)
    {
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hash';
    }
}
