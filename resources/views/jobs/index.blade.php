@extends('layouts.admin-layout')

@section('title', 'Job Listings')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        Job Management
                    </div>
                    <h2 class="page-title">
                        Job Opportunities
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <a href="{{ route('jobs.create') }}" class="btn btn-primary">
                        <span class="nav-link-icon d-md-none d-lg-inline-block text-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-circle-plus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M9 12h6" />
                                <path d="M12 9v6" />
                            </svg>
                        </span>
                        New Job Listing
                    </a>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show position-absolute"
            style="top: 1rem; right: 1rem; z-index: 1050;" role="alert">
            <div class="d-flex">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-check">
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

    <div class="page-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Job Listings Overview</h4>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover table-bordered mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Working Hours</th>
                                        <th>Upload Date</th> <!-- New Header -->
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <td>{{ $job->title }}</td>
                                            <td>{{ $job->type }}</td>
                                            <td>{{ $job->hours_start }} - {{ $job->hours_end }}</td>
                                            <td>{{ $job->created_at->format('F j, Y') }}</td> <!-- New Column -->
                                            <td class="text-center">
                                                <a href="{{ route('jobs.show', $job->id) }}" class="text-primary"
                                                    title="View Details">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                                        <path
                                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                                    </svg>
                                                </a>

                                                <a href="{{ route('jobs.edit', $job->id) }}" class="text-warning"
                                                    title="Edit Job">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                        <path
                                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                        <path d="M16 5l3 3" />
                                                    </svg>
                                                </a>
                                                
                                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#" class="text-danger" title="Delete Job"
                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this job?')) { this.closest('form').submit(); }">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-circle-minus">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                            <path d="M9 12l6 0" />
                                                        </svg>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hr-text hr-text-right text-primary">Card View</div>

            <div class="row mb-5 mt-5">
                @foreach ($jobs as $job)
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm mb-4 border-0">
                            <div class="card-header bg-dark text-white">
                                <h4 class="card-title mb-0 fw-semibold">{{ $job->title }}</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Type: {{ $job->type }}</p>
                                <p class="text-muted">Hours: {{ $job->hours_start }} - {{ $job->hours_end }}</p>
                                <p class="text-muted">Upload Date: {{ $job->created_at->format('F j, Y') }}</p> <!-- Added Upload Date -->
                                <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-outline-dark">View
                                    Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-3">
                {{$jobs->links()}}
            </div>
        </div>
    </div>
@endsection
