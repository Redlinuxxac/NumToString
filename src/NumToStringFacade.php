<?php

namespace Reddatasrd\NumTostring;

use illuminate\Support\Facades\Facade;

class NumTostringFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "NumTostring";
    }
}