<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::resource('products', ProductController::class);
Route::get('users', [UserController::class, 'index'])->name('users.index');