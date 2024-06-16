<?php

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Route;


Route::middleware(\App\Http\Middleware\SetLocale::class)->group(function (){
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
    Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::post('/message/send', [\App\Http\Controllers\ContactController::class, 'send'])->name('send_message');

    Route::get('/test', function (){

        $recipient = \App\Models\User::findOrFail(1);

        Notification::make()
            ->title('Saved successfully')
            ->sendToDatabase($recipient);
    });

    Route::get('/blog/article/{slug}', [\App\Http\Controllers\BlogController::class, 'article'])->name('article');

    Route::post('/comment/{id}', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment.save');

});
