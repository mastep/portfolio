<?php

use Illuminate\Support\Facades\Route;


Route::domain('burton.team')->group(function () {
    $url=str_replace(["burton.team", 'localhost'], "7lab.pro", url()->full());
    header("Location: $url", true, 301); exit();
    //text
});

Route::get('/', function () {
    return view('index');
});
Route::get('project-art-of-tea', function () {
    return view('project');
});
Route::get('project-corportal', function () {
    return view('project2');
});
Route::get('project-landing-page', function () {
    return view('project3');
});

Route::get('project_vasiliev_groove_landing', function () {
    return view('project_vg_landing');
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
Route::get('corporate-portal', function () {
    return view('service-3');
});
Route::get('it-sharing', function () {
    return view('service-4');
});


