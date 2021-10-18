<section id="contact" class="pb-5">
    <div class="container">
        <div class="">
            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h3 class="display-4">Contact Us</h3>
                    <div class="lead">Have a great idea? We will turn it into reality.</div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-7">
                <div class="card card-body shadow">
                    <form id="contactForm" method="post" action="{{route('sendMessage')}}">
                        @csrf
                        <div class="form-group">
                            <label for="demo-name">Your Name</label>
                            <input id="demo-name" name="name" type="text"
                                   class="form-control @error('contact-name') is-invalid @enderror"
                                   placeholder="Type here">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="demo-email">Email Address</label>
                            <input id="demo-email" name="email" type="email" class="form-control"
                                   placeholder="you@yoursite.com">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Project Breif</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Your message"
                                      rows="5"></textarea>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="d-none alert alert-success w-100 my-md-3" role="alert" data-success-message>
                            Thanks, a member of our team will be in touch shortly.
                        </div>

                        <div class="d-none alert alert-danger w-100 my-md-3" role="alert" data-error-message>
                            Please fill all fields correctly.
                        </div>
                        <!-- <div data-recaptcha data-sitekey="INSERT_YOUR_RECAPTCHA_V2_SITEKEY_HERE" data-size="invisible" data-badge="bottomleft"></div> -->
                        <button type="submit" class="btn btn-primary btn-block btn-loading"
                                data-loading-text="Requesting Demo">
                            <!-- Icon for loading animation -->
                            <svg class="icon bg-white" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Icon For Loading</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g>
                                        <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                    </g>
                                    <path
                                        d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) ">
                                    </path>
                                </g>
                            </svg>
                            <span id="send-btn">Send</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@push('after_main_scripts')
    <script type="text/javascript" src="{{asset('js/postEditor.js')}}"></script>
    <script>



        {{--$(document).ready(function () {--}}
        {{--    postEditor.setContents(JSON.parse(@json($post->content)));--}}

        {{--    $('.posttags').select2();--}}
        {{--    $('.posttags').val(@json($postTags)).trigger('change');--}}


        {{--})--}}
    </script>

@endpush
