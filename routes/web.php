<?php

use App\Models\QA;
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

// Telegram Bot routes
Route::post('/telegram/webhook', [App\Http\Controllers\TelegramController::class, 'webhook']);
Route::get('/webapp', [App\Http\Controllers\WebAppController::class, 'index']);
Route::get('/api/products', [App\Http\Controllers\WebAppController::class, 'api']);


/*Proxy для обхода CSRF - удалить d PROD*/
Route::get('/telegram/webhook_test',function (Illuminate\Http\Request $request){
    $update = $request->all();
    echo $answer = QA::findAnswer($update['message']['text'])?? 'Извините, я не нашел ответ на ваш вопрос. Попробуйте переформулировать вопрос или обратитесь к администратору.';
});

Route::post('/mail-short.php', [App\Http\Controllers\MailController::class, 'send']);


