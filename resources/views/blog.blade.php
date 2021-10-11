@extends('layouts.blog')
@section('content')
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach($posts->items() as $post)
                        @include('post.post',['post' => $post])
                    @endforeach
                </div>
            </div>
            @if($posts->count())
                <div class="row justify-content-center mt-4">
                    <div class="col-auto">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link rounded" href="#" aria-label="Previous">
                                        <img src="{{asset('images/icons/interface/icon-arrow-left.svg')}}"
                                             alt="Arrow Left"
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
                                        <img src="{{asset('images/icons/interface/icon-arrow-right.svg')}}"
                                             alt="Arrow Right"
                                             class="icon icon-xs bg-primary" data-inject-svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
