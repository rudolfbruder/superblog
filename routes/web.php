<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vsetky-blogy', function () {
    return view('blog.blogy');
})->name('blog.index');
