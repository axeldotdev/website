<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('lists', 'lists')->name('lists');
Route::view('content', 'content')->name('content.index');
