@extends('layouts.master')
@section('content')
    <div class="navbar-container bg-light">
        <nav class="navbar navbar-expand-lg navbar-light" data-overlay data-sticky="top">
            <div class="container">
                <a class="navbar-brand navbar-brand-dynamic-color fade-page" href="/">
                    <!--<img alt="Jumpstart" data-inject-svg src="assets/img/logos/jumpstart.svg">-->
                    <h4 class="text-white">Ravsols</h4>
                </a>
                <div class="d-flex align-items-center order-lg-3">
                    <a data-smooth-scroll href="#contact"
                       class="btn btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Contact Us</a>
                    <button aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                            data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <img alt="Navbar Toggler Open Icon" class="navbar-toggler-open icon icon-sm" data-inject-svg
                             src="{{asset('images/icons/interface/icon-menu.svg')}}">
                        <img alt="Navbar Toggler Close Icon" class="navbar-toggler-close icon icon-sm" data-inject-svg
                             src="{{asset('images/icons/interface/icon-x.svg')}}">
                    </button>
                </div>
                <div class="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end" id="navigation-menu">
                    <ul class="navbar-nav my-3 my-lg-0">
                        <li class="nav-item">
                            <a data-smooth-scroll class="nav-link" href="#our_work">Our Work</a>
                        </li>
                        <li class="nav-item">
                            <a data-smooth-scroll href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a data-smooth-scroll href="#technologies" class="nav-link">Technologies</a>
                        </li>
                        <li class="nav-item">
                            <a data-smooth-scroll href="#testimonials" class="nav-link">Testimonials</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach($posts->items() as $post)
                        <div class="mb-4 mb-md-5" data-aos="fade-up">
                            <div class="d-flex flex-column flex-lg-row no-gutters border rounded bg-white o-hidden">
                                <a href="#" class="d-block position-relative bg-gradient col-xl-5">
                                    <img class="flex-fill hover-fade-out" src="assets/img/blog/thumb-2.jpg"
                                         alt="blog.1.image">
                                    <div class="divider divider-side bg-white d-none d-lg-block"></div>
                                </a>
                                <div class="p-4 p-md-5 col-xl-7 d-flex align-items-center">
                                    <div class="p-lg-4 p-xl-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3 mb-xl-4">
                                            <a href="#" class="badge badge-pill badge-danger">Design</a>
                                            <div
                                                class="text-small text-muted">{{$post->created_at->toFormattedDateString()}}</div>
                                        </div>
                                        <a href="#"><h1>{{$post->title}}</h1></a>
                                        <p class="lead">{!! \Illuminate\Support\Str::limit($post->description,'100') !!}</p>
                                        <a href="#" class="lead">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link rounded" href="#" aria-label="Previous">
                                    <img src="assets/img/icons/interface/icon-arrow-left.svg" alt="Arrow Left"
                                         class="icon icon-xs bg-primary" data-inject-svg>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded" href="#" aria-label="Next">
                                    <img src="assets/img/icons/interface/icon-arrow-right.svg" alt="Arrow Right"
                                         class="icon icon-xs bg-primary" data-inject-svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
