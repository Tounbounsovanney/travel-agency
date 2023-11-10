@extends('frontend.master_front')
@push('banner_page')
    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
        <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet diam et eos erat ipsum lorem sit</p>
        <div class="position-relative w-75 mx-auto animated slideInDown">
            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
        </div>
    </div>
@endpush
@section('content')


    <!-- About Start -->
    @include('partials.about')
    <!-- About End -->


    <!-- Service Start -->
    @include('partials.services')
    <!-- Service End -->


    <!-- Destination Start -->
    @include('partials.destinatioon')
    <!-- Destination Start -->


    <!-- Package Start -->
    @include('partials.packages')

    
    <!-- Package End -->


    <!-- Booking Start -->
    @include('partials.booking')

    
    <!-- Booking Start -->


    <!-- Process Start -->
    @include('partials.process')

   
    <!-- Process Start -->


    <!-- Team Start -->
    @include('partials.guides')

    
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('partials.testimonial')

 
    <!-- Testimonial End -->
            
@endsection