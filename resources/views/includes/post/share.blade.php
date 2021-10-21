<div class="my-4 my-sm-5 card card-body flex-sm-row justify-content-between align-items-center">
{{--    {!! $socialShare !!}--}}
{{--    @dd($socialShare)--}}
    <div class="h5 mb-sm-0">Share this article:</div>
    <div class="d-flex">
        <a href="{{$socialShare['facebook']}}" class="btn btn-sm btn-primary rounded-circle mx-1">
            <img src="{{asset('images/icons/social/facebook.svg')}}" alt="Facebook"
                 class="icon icons-m bg-white" data-inject-svg>
        </a>
        <a href="{{$socialShare['twitter']}}" class="btn btn-sm btn-primary rounded-circle mx-1">
            <img src="{{asset('images/icons/social/twitter.svg')}}" alt="Twitter"
                 class="icon icons-m bg-white" data-inject-svg>
        </a>

        <a href="{{$socialShare['linkedin']}}" class="btn btn-sm btn-primary rounded-circle mx-1">
            <img src="{{asset('images/icons/social/linkedin.svg')}}" alt="Linked In"
                 class="icon icons-m bg-white" data-inject-svg>
        </a>
    </div>
</div>
