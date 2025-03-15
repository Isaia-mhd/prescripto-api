<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return View('Pages.Home');
});
