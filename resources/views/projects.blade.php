@extends('layouts.project')
@section('content')
    <div class="loader">
        <div class="loading-animation"></div>
    </div>
    <section class="bg-primary-3 text-white">
        <div class="container">
            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h1 class="display-3">All Projects</h1>
                    <div class="lead">Theses are the projects we have worked on.
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($projects as $project )
                    <div class="col-xl-6 col-lg-9 col-md-10 mb-3 mb-sm-5">
                        <div class="card h-100 hover-box-shadow bg-white">
                            <a target="_blank" href="https://bss.ravsols.com" rel="noopener"
                               class="d-block bg-gradient rounded-top position-relative">
                                <img class="card-img-top hover-fade-out"
                                     src="{{url("storage/images/".$project->image)}}"
                                     alt="Image accompanying Circle testimonial">
                                <div class="badge badge-light">
                                    <h6 class="m-lg-1">{{$project->title}}</h6>
                                </div>
                            </a>
                            <div class="card-body">
                                <h3>{{$project->title}}</h3>
                                <p>
                                    {{$project->description}}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="stretched-link">Read more</a>
                                    <a href="#" class="stretched-link">Read more</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    {{$projects->links('vendor.pagination.bootstrap-4')}}
{{--                    <nav>--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link rounded" href="#" aria-label="Previous">--}}
{{--                                    <img src="assets/img/icons/interface/icon-arrow-left.svg" alt="Arrow Left"--}}
{{--                                         class="icon icon-xs bg-primary" data-inject-svg>previous--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            @for($i=1 ; $i<= $projects->lastPage; $i++)--}}

{{--                                <li class="page-item active"><a class="page-link" href="#">{{$i}}</a>--}}
{{--                                </li>--}}
{{--                            @endfor--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link rounded" href="#" aria-label="Next">next--}}
{{--                                    <img src="assets/img/icons/interface/icon-arrow-right.svg" alt="Arrow Right"--}}
{{--                                         class="icon icon-xs bg-primary" data-inject-svg>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
