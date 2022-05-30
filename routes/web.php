<?php

use Redlinux\NumTostring\NumTostring\NumTostring;
use Illuminate\Support\Facades\Route;
use Redlinux\NumTostring\NumTostring\NumTostringFacade;

Route::get('/cal', function(){
    $nu=5;
    return NumTostring::string($nu);
});