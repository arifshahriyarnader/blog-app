<?php

use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterController::class, 'index']);

Route::get('/posts', function () {
    return view('posts.index');
});
