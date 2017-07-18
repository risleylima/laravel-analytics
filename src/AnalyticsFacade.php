<?php

namespace risleylima\Analytics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \risleylima\Analytics\Analytics
 */
class AnalyticsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-analytics';
    }
}
