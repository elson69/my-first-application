<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;



// Home page
Route::get('/', function () {
    return view('contact'); // or 'home' if you have home.blade.php
});

// Show all jobs (Index)
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->paginate(10)
    ]);
});

// Show create form (Create)
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store new job (Store)
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1, // temporary hardcoded
    ]);

    return redirect('/jobs');
});

// Show edit form (Edit)
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update job (Update)
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
});

// Delete job (Destroy)
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});

// Show single job (Show) — must come last
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});
