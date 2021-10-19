<div class="mb-4 mb-md-5" data-aos="fade-up">
    <div class="d-flex flex-column flex-lg-row no-gutters border rounded bg-white o-hidden">
        <a href="/{{$post->slug}}" class="d-block position-relative bg-gradient col-xl-5">
            <img class="flex-fill hover-fade-out" src="{{asset("storage/images/$post->image")}}"
                 alt="blog.1.image">
            <div class="divider divider-side bg-white d-none d-lg-block"></div>
        </a>
        <div class="p-4 p-md-5 col-xl-7 d-flex align-items-center">
            <div class="p-lg-4 p-xl-5 w-100">
                <div class="d-flex justify-content-between align-items-center mb-3 mb-xl-4">
                    <div>
                        @foreach($post->tags as $tag)
                            <a href="#" class="badge badge-pill badge-danger">{{$tag->name}}</a>
                        @endforeach
                    </div>
                    <div
                        class="text-small text-muted">{{$post->created_at->toFormattedDateString()}}</div>
                </div>
                <a href="/{{$post->slug}}"><h1>{{$post->title}}</h1></a>
                <p class="lead">{!! \Illuminate\Support\Str::limit($post->html_content,'100') !!}</p>
                <a href="/{{$post->slug}}" class="lead">Read More</a>
            </div>
        </div>
    </div>
</div>
