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
                        {{$posts->links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
