<?php

namespace App\Http\Controllers;
use App\Models\Job;

use Illuminate\Http\Request;

class JobController extends Controller
{

    // Index
    public function index()
    {
        $jobs = Job::with('employer')->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Create form
    public function create()
    {
        return view('jobs.create');
    }

    // Store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create([
            'title' => $validated['title'],
            'salary' => $validated['salary'],
            'employer_id' => 1, // placeholder for now
        ]);

        return redirect('/jobs');
    }

    // Edit form
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update
    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job->update($validated);

        return redirect('/jobs/' . $job->id);
    }

    // Destroy
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }

    // Show
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }
}
