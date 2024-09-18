<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('project1', function () {
    return view('project');
});
Route::get('landing', function () {
    return view('service-1');
});
