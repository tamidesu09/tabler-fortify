@extends('layouts.app')

@section('content')

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Careers</h1>
    <p>i-Bear True Solutions Inc.</p>
  </div>
</div>

<div class="container">
<h1 class="mt-5">JOB <span style="color: #163673">OPENINGS</span></h1>
<div class="container mt-5">

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
                    <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-outline-dark">View Details</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="container mt-5">
  <div class="row">
    <h1 class="mt-5">WORK <span style="color: #163673">ARRANGEMENT</span></h1>

    <!-- First Card: ONLINE -->
    <div class="col-md-4">
      <div class="card bg-dark text-white custom-card border-0">
        <img src="{{ asset('img/online.jpg') }}" class="card-img" alt="Onsite Work">
        <div class="card-img-overlay d-flex justify-content-center align-items-center custom-overlay">
          <h1 class="card-title fw-bold" style="font-size: 3rem; color: #163673">Onsite</h1>
        </div>
      </div>
    </div>

    <!-- Second Card: HYBRID -->
    <div class="col-md-4">
      <div class="card bg-dark text-white custom-card border-0">
        <img src="{{ asset('img/hybrid.jpeg') }}" class="card-img" alt="Hybrid Work">
        <div class="card-img-overlay d-flex justify-content-center align-items-center custom-overlay">
          <h1 class="card-title fw-bold" style="font-size: 3rem; color: #163673">Hybrid</h1>
        </div>
      </div>
    </div>

    <!-- Third Card: WORK FROM HOME -->
    <div class="col-md-4">
      <div class="card bg-dark text-white custom-card border-0">
        <img src="{{ asset('img/wfh.jpg') }}" class="card-img" alt="Work from Home">
        <div class="card-img-overlay d-flex justify-content-center align-items-center custom-overlay">
          <h1 class="card-title fw-bold" style="font-size: 3rem; color: #163673">WFH</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<style>
body, html {
  height: 100%;
  margin: 0;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('img/contact.png') }}");
  height: 50vh; /* Change to 50vh for better responsiveness */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.custom-card {
  height: 200px; /* You can adjust the height here */
  overflow: hidden;
  position: relative;
}

/* Create a more opaque overlay */
.custom-overlay {
  background-color: rgba(255, 255, 255, 0.9); /* Increased opacity */
  transition: background-color 0.3s ease-in-out; /* Smooth transition for hover */
}

/* When hovering, the overlay fades out */
.custom-card:hover .custom-overlay {
  background-color: rgba(255, 255, 255, 0); /* Fully transparent on hover */
}

</style>


@endsection
