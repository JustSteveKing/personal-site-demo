<?php

declare(strict_types=1);

use App\Http\Controllers\Pages\Blog\ShowController;
use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::view('about', 'pages.about')->name('about');
Route::view('blog', 'pages.blog')->name('blog');

Route::get(
    'blog/{post:id}',
    ShowController::class
)->name('blog:show');
