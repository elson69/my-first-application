<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');   // load home.blade.php
});

Route::get('/about', function () {
    return view('about');  // load about.blade.php
});

Route::get('/contact', function () {
    return view('contact'); // load contact.blade.php
});
