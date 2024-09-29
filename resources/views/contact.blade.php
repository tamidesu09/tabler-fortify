@extends('layouts.app')

@section('content')

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Contact Us</h1>
    <p>i-Bear True Solutions Inc.</p>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <!-- Left Column: Form -->
    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
      <h2 class="mb-5">Tell us your concerns!</h2>
      <div class="mb-5">
        <label for="exampleFormControlInput1" class="form-label">Your Full Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="namefield" placeholder="Your Name">
      </div>
      <div class="mb-5">
        <label for="exampleFormControlInput2" class="form-label">Your Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="emailfield" placeholder="Your Email">
      </div>
      <div class="mb-5">
        <label for="exampleFormControlInput3" class="form-label">Your Phone Number <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="phonefield" placeholder="+63 994 932 2386">
      </div>
      <div class="mb-5">
        <label for="exampleFormControlTextarea1" class="form-label">Your Message <span class="text-danger">*</span></label>
        <textarea class="form-control" id="msgfield" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-outline-primary">Submit</button>
    </div>

    <!-- Right Column: Maps with Address Cards -->
    <div class="col-md-6">
      <!-- First Card: TIP Manila -->
      <div class="card border-0 mb-3" data-aos="fade-up" data-aos-duration="1500">
        <div class="card-body">
          <div class="map-container mb-3" style="height: 260px;"> <!-- Adjusted height -->
            <iframe 
              class="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.799198538013!2d120.98279231744385!3d14.609877860558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9b0cd38332d%3A0x2ccbf65b9a7f803f!2sTechnological%20Institute%20of%20the%20Philippines!5e0!3m2!1sen!2sph!4v1611051602882!5m2!1sen!2sph"
              allowfullscreen=""
              loading="lazy"
              style="border: 0; width: 100%; height: 100%;"
            ></iframe>
          </div>
          <p class="card-text">
            363 Pascual Casal St, Quiapo, Manila, 1001 Metro Manila<br>
            Phone: <span class="text-primary">(+63) 2 8735 6616</span>
          </p>
        </div>
      </div>

      <!-- Second Card: TIP Quezon City -->
      <div class="card border-0" data-aos="fade-up" data-aos-duration="1500">
        <div class="card-body">
          <div class="map-container mb-3" style="height: 260px;"> <!-- Adjusted height -->
            <iframe 
              class="map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.799198538013!2d121.0478926!3d14.6519452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b75964a95f47%3A0xf40ae3a48dca5ae8!2sTechnological%20Institute%20of%20the%20Philippines%20Quezon%20City!5e0!3m2!1sen!2sph!4v1611051902883!5m2!1sen!2sph"
              allowfullscreen=""
              loading="lazy"
              style="border: 0; width: 100%; height: 100%;"
            ></iframe>
          </div>
          <p class="card-text">
            938 Aurora Blvd, Cubao, Quezon City, 1109 Metro Manila<br>
            Phone: <span class="text-primary">(+63) 2 8721 4866</span>
          </p>
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

.map-container {
  width: 100%;
}

.map {
  width: 100%; /* Full width for responsiveness */
  height: 80%;
}
</style>

@endsection
