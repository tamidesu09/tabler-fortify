<!-- resources/views/candidates/index.blade.php -->
@extends('layouts.admin-layout')

@section('title', 'Candidates')

@section('content')



    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">

                    <h1 class="fw-bold mb-5">Candidates Dashboard</h1>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-status-start bg-azure"></div>
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4>NUMBER OF CANDIDATES</h4>
                                        <h3 class="text-primary">{{ $applicationsCount }}</h3>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="large-icon text-muted" width="40"
                                            height="40" viewBox="0 0 24 24" fill="currentColor"
                                            class="icon icon-tabler icons-tabler-filled icon-tabler-user">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                                            <path
                                                d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-status-start bg-azure"></div>
                                <div class="card-body">
                                    <h3>Number of Candidates</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-status-start bg-azure"></div>
                                <div class="card-body">
                                    <h3>Number of Candidates</h3>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Page pre-title -->
                    <div class="page-pretitle mt-5">
                        Candidates
                    </div>
                    <h2 class="page-title">
                        Candidate List
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container">

            <!-- Success Alert -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show position-absolute"
                    style="top: 1rem; right: 1rem; z-index: 1050;" role="alert">
                    <div class="d-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l5 5l10 -10" />
                            </svg>
                        </div>
                        <div class="ms-2">
                            <h4 class="alert-title">Success!</h4>
                            <p class="text-secondary mb-0">{{ session('success') }}</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Applicants</h4>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover table-bordered mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Sex</th>
                                <th class="text-center">Resume/CV</th>
                                <th class="text-center">Date Applied</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $application)
                                <tr>
                                    <td>{{ $application->complete_name }}</td>
                                    <td>{{ $application->email }}</td>
                                    <td>{{ $application->phone_number }}</td>
                                    <td>{{ $application->sex ?? 'Not Specified' }}</td>
                                    <td>
                                        <center>
                                            <a href="{{ asset('storage/' . $application->cv_path) }}" target="_blank"
                                                class="badge bg-azure">
                                                Download CV
                                            </a>
                                        </center>
                                    </td>
                                    <td class="text-center">{{ $application->created_at->format('F j, Y') }}</td>
                                    <td class="text-center">
                                        <a href="#" class="text-primary" title="View Applicant">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                <path
                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                        </a>

                                        <a href="#" class="text-warning" title="Edit Applicant">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                <path
                                                    d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                <path d="M16 5l3 3" />
                                            </svg>
                                        </a>

                                        <form action="{{ route('candidate.destroy', $application->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" class="text-danger" title="Delete Applicant"
                                                onclick="event.preventDefault(); if(confirm('Are you sure you want to remove this applicant?')) { this.closest('form').submit(); }">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-circle-minus">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                    <path d="M9 12l6 0" />
                                                </svg>
                                            </a>
                                        </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <style>
                    .large-icon {
                        width: 60px;
                        /* Adjust as needed */
                        height: 60px;
                        /* Adjust as needed */
                    }
                </style>

            @endsection
