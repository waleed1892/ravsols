@extends('layouts.master')
@section('content')
    <!--Navbar-->
    @include('includes.navbar')

    <!--Our Work Section-->
    @include('includes.our_work')
    <!--Our Features-->
    @include('includes.features')
    <!-- Our Services -->
    @include('includes.services')
    <!--Our Technologies-->
    @include('includes.technologies')
    <!--Testimonials Section-->
    @include('includes.testimonials')
    <!--Contact Form-->
    @include('includes.contact')
@endsection
