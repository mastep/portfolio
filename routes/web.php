<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('project-art-of-tea', function () {
    return view('project');
});
Route::get('landing-page', function () {
    return view('service-1');
});
Route::get('form', function () {
    return view('form');
});

Route::get('e-commerce', function () {
    return view('service-2');
});
