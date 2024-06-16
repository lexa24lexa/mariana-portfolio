<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'welcome'])->name('home');
Route::get('/welcome{trailing_slash?}', [BasicController::class, 'welcome'])->name('welcome');
Route::get('/post/create', [BasicController::class, 'create'])->name('posts.create');
Route::post('/post', [BasicController::class, 'store'])->name('posts.store');
Route::get('/post/{post}', [BasicController::class, 'show'])->name('posts.show');
Route::get('/post/{post}/edit', [BasicController::class, 'edit'])->name('posts.edit');
Route::put('/post/{post}', [BasicController::class, 'update'])->name('posts.update');
Route::get('/post/{post}/delete', [BasicController::class, 'delete'])->name('posts.delete');
Route::delete('/post/{post}', [BasicController::class, 'destroy'])->name('posts.destroy');
