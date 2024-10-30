<?php

namespace End3rman\Qurik;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Qurik\QurikManager
 */
class Flux extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'qurik';
    }
}
