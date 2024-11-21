<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Định nghĩa route liên kết trực tiếp tới view
Route::view('/info', 'layouts.info');
Route::view('/app', 'layouts.app');

