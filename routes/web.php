<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index'); // Estos nombres son el alias que usaremos con el metodo route('name')
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
