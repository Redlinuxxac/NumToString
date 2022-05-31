<?php

use Reddatasrd\NumTostring\NumTostring;
use Illuminate\Support\Facades\Route;
use Reddatasrd\NumTostring\NumTostringFacade;

Route::get('/cal', function(){
    $nu=5;
    return NumTostring::string($nu);
});