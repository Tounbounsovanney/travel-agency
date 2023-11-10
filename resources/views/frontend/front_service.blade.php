@extends('frontend.master_front')
@push('banner_page')
<div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
    <h1 class="display-3 text-white animated slideInDown">Services</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
        </ol>
    </nav>
</div>
@endpush
@section('content')



    <!-- Service Start -->
    @include('partials.services')
    <!-- Service End -->

    <!-- Testimonial Start -->
    @include('partials.testimonial')

 
    <!-- Testimonial End -->
            
@endsection