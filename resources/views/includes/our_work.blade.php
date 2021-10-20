<section id="our_work">
    <div class="container">
        <div class="row section-title justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <h3 class="display-4">Our
                    <mark data-aos="highlight-text" data-aos-delay="300">Work</mark>
                </h3>
                <div class="lead">We have created things that are awesome.</div>
            </div>
        </div>
        <div class="row">
            @foreach($projects as $project )
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">
                    <div class="card h-100 hover-box-shadow">
                        <a target="_blank" href="https://bss.ravsols.com" rel="noopener"
                           class="d-block bg-gradient rounded-top position-relative">
                            <img class="card-img-top hover-fade-out" src="{{url("storage/images/".$project->image)}}"
                                 alt="Image accompanying Circle testimonial">
                            <div class="badge badge-light">
                                <!-- <img src="assets/img/logos/brand/asgardia.svg" alt="Business universal company logo" class="icon icon-sm m-lg-1"> -->
                                <h6 class="m-lg-1">{{$project->title}}</h6>
                            </div>
                        </a>
                        <div class="card-body">
                            <h3>{{$project->title}}</h3>
                            <p>
                                {{$project->description}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
{{--            <div class="col-md-6 col-lg-4 mb-3 mb-md-4 mb-lg-0">--}}
{{--                <div class="card h-100 hover-box-shadow">--}}
{{--                    <a target="_blank" href="https://bss.ravsols.com" rel="noopener"--}}
{{--                       class="d-block bg-gradient rounded-top position-relative">--}}
{{--                        <img class="card-img-top hover-fade-out" src="{{asset('images/bss.jpg')}}"--}}
{{--                             alt="Image accompanying Circle testimonial">--}}
{{--                        <div class="badge badge-light">--}}
{{--                            <!-- <img src="assets/img/logos/brand/asgardia.svg" alt="Business universal company logo" class="icon icon-sm m-lg-1"> -->--}}
{{--                            <h6 class="m-lg-1">Business Universal</h6>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <div class="card-body">--}}
{{--                        <h3>Business Universal</h3>--}}
{{--                        <p>--}}
{{--                            BSS is a coporate agency that offers professional and afforable custom business--}}
{{--                            applications.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-center mt-4 mt-md-5" data-aos="fade-up"
         data-aos-delay="300">
        <a data-smooth-scroll href="/projects" class="btn btn-primary btn-lg mx-sm-2 my-1 my-sm-0">See
            all projects</a>
    </div>
</section>
