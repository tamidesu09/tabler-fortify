@extends('layouts.admin-layout')

@section('title', 'Edit Job Listing')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">
                            Job Management
                        </div>
                        <h2 class="page-title">
                            Edit Job
                        </h2>
                    </div>
                    <!-- Back to Jobs button -->
                    <div class="col-auto ms-auto d-print-none">
                        <a href="{{ route('jobs.index') }}" class="btn btn-primary">
                            <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                                <!-- SVG back arrow icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 14l-4 -4l4 -4" />
                                    <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                                </svg>
                            </span>
                            Back to Jobs
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container">

                <!-- Success Alert -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show position-absolute" style="top: 1rem; right: 1rem; z-index: 1050;" role="alert">
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

                <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 mt-5">
                        <label for="title" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Job Type</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="Full-time" {{ $job->type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                            <option value="Part-time" {{ $job->type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                            <option value="Contractual" {{ $job->type == 'Contractual' ? 'selected' : '' }}>Contractual</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required>{{ $job->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="hours_start" class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="hours_start" name="hours_start"
                            value="{{ $job->hours_start }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="hours_end" class="form-label">End Time</label>
                        <input type="time" class="form-control" id="hours_end" name="hours_end" value="{{ $job->hours_end }}"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary"
                        onclick="return confirm('Are you sure you want to update this job listing?');">Update Job
                        Listing</button>
                </form>
            </div>
        </div>
    </div>
@endsection
