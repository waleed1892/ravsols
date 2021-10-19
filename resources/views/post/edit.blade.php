@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="{{asset('highlight/styles/monokai.min.css')}}">
@endpush
@section('content')
    <div class="bg-white shadow rounded-sm px-6 py-8">
        {{--                {{dd($postTags)}}--}}
        <form id="postEditForm" enctype="multipart/form-data" method="post" action="{{route('posts.store')}}">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{$post->id}}" name="post_id">

            <div>
                <input class="custom-input" placeholder="Title" type="input" name="title" value="{{$post->title}}"/>
                <input class="custom-input mt-4" placeholder="Meta tags" value="{{$post->meta_tag}}" type="input"
                       required name="meta_tag"/>
                <input class="custom-input mt-4" placeholder="Description" value="{{$post->description}}" type="input"
                       required name="description"/>

                <input id="imageInput" class="custom-input mt-4" accept="image/*" type="file" name="image">

                <div class="w-36 h-36 rounded bg-gray-100 mt-4 shadow-sm border border-gray-200">
                    <img class="w-full h-full object-contain" id="imagePreview"
                         src="{{url("storage/images/".$post->image)}}" alt="">
                </div>
                <div class="mt-4">
                    <div id="postEditor"></div>
                </div>
            </div>

            <div class="mt-5">
                <label for="" class="mt-5"> Select tags</label>
                <select class="posttags custom-input" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>

{{--                <select class="techs-multiple custom-input" name="technologies[]" multiple="multiple">--}}
{{--                    @foreach($techs as $tech)--}}
{{--                        <option value="{{$tech->id}}">{{$tech->title}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
            </div>

            <div class="mt-5">
                <label for="start">Schedule Post date:</label>
                <input type="date" id="start" class="custom-input" name="schedule_post"
                       value="{{$post->schedule_post}}"
                       max="2038-12-31">
            </div>

            <div class="mt-4">
                <input type="checkbox" class="" id="is_published" name="published"
                       @if($post->published ==1) checked=checked @endif
                       value="1">
                <label for="">Publish</label>
            </div>
            <button class="bg-green-600 text-sm rounded text-white p-2 uppercase mt-4 px-6 py-2 font-semibold">save
            </button>
        </form>
    </div>
@endsection
@push('before_main_scripts')
    <script src="{{asset('highlight/highlight.min.js')}}"></script>
@endpush
@push('after_main_scripts')
    <script type="text/javascript" src="{{asset('js/postEditor.js')}}"></script>
    <script>

        $(document).ready(function () {
            postEditor.setContents(JSON.parse(@json($post->content)));

            $('.posttags').select2();
            $('.posttags').val(@json($postTags)).trigger('change');


        })
    </script>

@endpush
