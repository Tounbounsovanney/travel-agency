@extends('frontend.master_front')
@push('banner_page')
<div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
    <h1 class="display-3 text-white animated slideInDown">Packages</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>
        </ol>
    </nav>
</div>
@endpush
@section('content')

    <!-- Package Start -->
    @include('partials.packages')

    
    <!-- Package End -->


    <!-- Process Start -->
    @include('partials.process')

   
    <!-- Process Start -->
         
@endsection