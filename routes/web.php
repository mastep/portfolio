<?php

use App\Models\QA;
use App\Services\TelegramService;
use Illuminate\Support\Facades\Route;

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

Route::get('project_lotto_app', function () {
    return view('project-lotto');
});

Route::get('project_telegram_bot', function () {
    return view('project-telegram-bot');
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

Route::get('privacy', function () {
    return view('privacy');
});

Route::get('api', function () {
    return view('service-api');
});

Route::get('telegram-bot', function () {
    return view('service-telegram-bot');
});

Route::get('project_video_production', function () {
    return view('project-promo-video');
});

Route::get('project_golden_ration', function () {
    return view('project_golden_ration');
});

Route::get('faq', function () {
    return view('faq');
});






