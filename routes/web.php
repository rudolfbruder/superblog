<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vsetky-blogy', function () {
    return view('blog.blogy');
})->name('blog.index');

Route::get('blog/vytvorit', function () {
    return view('blog.create');
})->name('blog.create');


Route::get('vytvorit-falosny-blog', function (): void {
    Blog::create([
        'title' => 'Nas falsony nadpis',
        'short_description' => 'Kratky popis fejk',
        'content' => 'Obsah by bol tu',
        'category' => 'Cestovanie',
        'author_name' => 'Rudolf Fejk Bruder',
    ]);
});
