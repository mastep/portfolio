<?php

// Telegram Bot routes
Route::post('/telegram/webhook', [App\Http\Controllers\TelegramController::class, 'webhook']);
Route::get('/webapp', [App\Http\Controllers\WebAppController::class, 'index']);
Route::get('/api/products', [App\Http\Controllers\WebAppController::class, 'api']);


/*Proxy для обхода CSRF - удалить d PROD*/
Route::get('/telegram/webhook_test',function (Illuminate\Http\Request $request){
$update = $request->all();
echo $answer = QA::findAnswer($update['message']['text'])?? 'Извините, я не нашел ответ на ваш вопрос. Попробуйте переформулировать вопрос или обратитесь к администратору.';
});
