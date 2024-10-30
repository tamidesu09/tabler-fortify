<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationsCreateRequest;
use App\Http\Requests\ApplicationsUpdateRequest;
use App\Models\Applications;
use Illuminate\Http\Request;


class ApplicationsController extends Controller
{
    public function index()
{
    $applications = Applications::paginate(10);
    $applicationsCount = Applications::count(); // Get total number of applications
    return view('candidate.index', compact('applications', 'applicationsCount'));
}

    public function create()
    {
        return view('candidate.create');
    }

    public function store(ApplicationsCreateRequest $request)
    {
       // Handle the CV upload
    if ($request->hasFile('cv')) {
        $cvPath = $request->file('cv')->store('cvs'); // Adjust as necessary
        $data = $request->validated();
        $data['cv_path'] = $cvPath; // Add cv_path to the data array
    } else {
        return back()->withErrors(['cv' => 'CV is required']);
    }

    // Create a new application record
    Applications::create($data);

    return back()->with('success', 'Application submitted successfully.');
    }
    

    public function show($application_id)
    {
        $application = Applications::findOrFail($application_id);
        return view('candidate.show', compact('application'));
    }

    public function edit($application_id)
    {
        $application = Applications::findOrFail($application_id);
        return view('candidate.edit', compact('application'));
    }

    public function update(ApplicationsUpdateRequest $request, $application_id)
    {
        $validatedData = $request->validated();
        $application = Applications::findOrFail($application_id);
        $application->update($validatedData);

        return redirect()->route('candidate.index')->with('success', 'Application updated successfully.');
    }

    public function destroy($application_id)
    {
        $application = Applications::findOrFail($application_id);
        $application->delete();

        return redirect()->route('candidate.index')->with('success', 'Applicant has been deleted successfully.');
    }
}
