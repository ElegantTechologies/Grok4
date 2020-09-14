<?php

namespace ElegantTechnologies\Grok4\Facades;

use Illuminate\Support\Facades\Facade;

class Grok4 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'grok4';
    }
}
