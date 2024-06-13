<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/blog/article/{slug}', [\App\Http\Controllers\BlogController::class, 'article'])->name('article');

Route::post('/comment/{id}', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment.save');
