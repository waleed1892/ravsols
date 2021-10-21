<section class="bg-light">
    <div class="container">
        <div class="row section-title justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
                <h3 class="h1">More great articles</h3>
            </div>
        </div>
        <div class="row">
            @foreach($relatedPosts as $post)
                <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
                    <div class="card h-100 hover-box-shadow">
                        <a href="" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out w-100" style="height: 350px;object-fit: cover" src="{{asset("storage/images/$post->image")}}"
                                 alt="blog.5.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>{{$post->title}}</h3>
                            </a>
                            <p class="lead">{!! \Illuminate\Support\Str::limit($post->html_content,'100') !!}</p>
                            <a href="/{{$post->slug}}">Read Story</a>
                        </div>
                        <div class="card-footer ">
                            @foreach($post->tags as $tag)
                                <a href="#" class="badge badge-pill badge-danger">{{$tag->name}}</a>
                            @endforeach
{{--                            <div class="text-small text-muted">{{$post->created_at}}</div>--}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
