<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/web', function () {
    return view('web.pages.welcome');
});

