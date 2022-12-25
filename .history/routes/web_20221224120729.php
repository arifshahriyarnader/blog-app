<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/posts', function () {
    return view('posts.index');
});
