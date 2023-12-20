<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/post/{id}', [BlogController::class, 'show'])->name('post.show');

Route::get('/post1', [BlogController::class, 'post1'])->name('post1');
Route::get('/post2', [BlogController::class, 'post2'])->name('post2');
Route::get('/post3', [BlogController::class, 'post3'])->name('post3');
