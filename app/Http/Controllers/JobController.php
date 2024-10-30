<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsCreateRequest;
use App\Http\Requests\JobsUpdateRequest; // Create this request for validation
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate(3);
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(JobsCreateRequest $request)
    {
        $validatedData = $request->validated();
        Job::create($validatedData);
        return back()->with('success', 'Job has been created successfully.');
    }

    public function show($job_id)
    {
        $job = Job::findOrFail($job_id);
        return view('jobs.show', compact('job'));
    }

    public function edit($job_id)
{
    $job = Job::findOrFail($job_id); // Retrieves the job by ID or throws a 404 error if not found
    return view('jobs.edit', compact('job')); // Pass the job data to the edit view
}

public function update(JobsCreateRequest $request, $job_id)
{
    $validatedData = $request->validated(); // Validate the data
    $job = Job::findOrFail($job_id); // Find the job or fail
    $job->update($validatedData); // Update the job with validated data

    return redirect()->route('jobs.index')->with('success', 'Job has been updated successfully.'); // Redirect to index with success message
}

public function destroy($job_id)
{
    // Find the job or throw a 404 error
    $job = Job::findOrFail($job_id);

    // Delete the job from the database
    $job->delete();

    // Redirect back to the jobs index page with a success message
    return redirect()->route('jobs.index')->with('success', 'Job has been deleted successfully.');
}



}
