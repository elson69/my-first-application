<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;




// Home page
Route::get('/', function () {
    return view('contact'); // or 'home' if you have home.blade.php
});

Route::resource('jobs', JobController::class);

