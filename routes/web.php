<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('contact');
});

// ✅ Show all jobs (with employer + tags + pagination)
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::with('employer')->paginate(10)
    ]);
});




// ✅ Show a single job (with employer + tags)
Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => Job::with(['employer', 'tags'])->findOrFail($id)
    ]);
});
