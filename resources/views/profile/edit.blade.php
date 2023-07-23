@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <!-- Two Factor Authentication -->
            <div class="mb-3">
                @include('profile.two-factor')

            </div>
            <!-- Profile Information -->

            <div class="mb-3">
                @include('profile.profile')
            </div>
            
            <!-- Password -->
            <div class="mb-3">
                @include('profile.password')
            </div>

        </div>
    </div>
</div>
@endsection