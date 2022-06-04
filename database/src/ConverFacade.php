<?php

namespace Reddatasrd\Conver;

use illuminate\Support\Facades\Facade;

class ConverFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "Conver";
    }
}