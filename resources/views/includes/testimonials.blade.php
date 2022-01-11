<section id="testimonials" class="bg-primary-3 text-white o-hidden pb-0">
    <div class="container">
        <div class="row section-title justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <h3 class="display-4">Customers are lovin’ it</h3>
            </div>
        </div>
    </div>
    <div class="highlight-selected"
         data-flickity='{ "imagesLoaded": true, "wrapAround":true, "pageDots":false, "adaptiveHeight":true, "autoPlay":3000 }'>

        @foreach($testimonials as $testimonial)
            <div class="carousel-cell col-xl-7 col-md-8">
                <div class="row align-items-center justify-content-start justify-content-sm-center mx-3 mx-xl-4">
                    <div class="col-sm-auto mb-4 mb-sm-0">
                        <img class="img-fluid avatar avatar-xl" src="{{url("storage/images/".$testimonial->image)}}"
                             alt="Harvey Derwent avatar image">
                    </div>
                    <div class="col pl-lg-4">
                        <h4 class="h2">{{$testimonial->name}}</h4>
                        <h4 class="h5">{{$testimonial->company}}</h4>
                        <p>{{$testimonial->message}}
                        </p>
                    </div>
                </div>
            </div>

        @endforeach
        <div class="carousel-cell col-xl-7 col-md-8">
            <div class="row align-items-center justify-content-start justify-content-sm-center mx-3 mx-xl-4">
                <div class="col-sm-auto mb-4 mb-sm-0">
                    <img class="img-fluid avatar avatar-xl" src="{{asset('images/avatars/male-4.jpg')}}"
                         alt="Harvey Derwent avatar image">
                </div>
                <div class="col pl-lg-4">
                    <h4 class="h2">&ldquo;We are working at almost twice the capacity&rdquo;</h4>
                    <p>
                        We had all sorts of problems around motivation and productivity from our smallest scrums to our
                        largest
                        teams. Ravsols helped us rise above all and conquer.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-cell col-xl-7 col-md-8">
            <div class="row align-items-center justify-content-start justify-content-sm-center mx-3 mx-xl-4">
                <div class="col-sm-auto mb-4 mb-sm-0">
                    <img class="img-fluid avatar avatar-xl" src="{{asset('images/avatars/male-1.jpg')}}"
                         alt="Harvey Derwent avatar image">
                </div>
                <div class="col pl-lg-4">
                    <h4 class="h2">&ldquo;Ravsols increases productivity.&rdquo;</h4>
                    <p>
                        We had all sorts of problems around motivation and productivity from our smallest scrums to our
                        largest
                        teams.
                        <mark data-aos="highlight-text" data-aos-delay="200">Ravsols helped us rise above all and
                            conquer.
                        </mark>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute w-50 h-100 top right" data-jarallax-element="100 48">
        <div class="blob blob-2 w-100 h-100 top right bg-gradient opacity-50"></div>
    </div>
    <div class="divider divider-bottom bg-white"></div>
</section>
