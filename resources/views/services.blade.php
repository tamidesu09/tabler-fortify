@extends('layouts.app')

@section('content')

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Services</h1>
    <p>i-Bear True Solutions Inc.</p>
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


</style>

    <div class="container mt-5">
    <h3 class="fw-bold">WHAT WE PROVIDE</h3>
    <ul>
    <li class="mt-3" style="font-size: 23px">iBTS brings together a perfect blend of IT and business management expertise in the solutions we provide to our clients. </li>
    <li style="font-size: 23px">iBTS believes that IT is not the end, but a means to an end i.e. creating or enhancing the value of the business through its innovative and practical IT solutions.</li>
    </ul>
    </div>
@endsection

