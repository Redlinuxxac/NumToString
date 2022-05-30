<?php

use Redlinux\Conver\Conver;
use Illuminate\Support\Facades\Route;
use Redlinux\Conver\Conver\ConverFacade;

Route::get('/cal', function(){
    $nu=5;
    return Conver::string($nu);
});