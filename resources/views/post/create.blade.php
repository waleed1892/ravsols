@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="{{asset('highlight/styles/monokai.min.css')}}">
@endpush
@section('content')
    <div class="bg-white shadow rounded-sm px-6 py-8">
        <form id="postForm" enctype="multipart/form-data" method="post" action="{{route('posts.store')}}">
            @csrf
            <div>
                <input
                    class="custom-input"
                    placeholder="Title" type="input" name="title"/>
                <input id="imageInput" class="custom-input mt-4" accept="image/*" type="file" name="image">
                <div class="w-36 h-36 rounded bg-gray-100 mt-4 shadow-sm border border-gray-200">
                    <img class="w-full h-full object-contain" id="imagePreview"
                         src="https://via.placeholder.com/150x150?text=Add+image" alt="select iamge">
                </div>

                <div class="mt-4">
                    <div id="postEditor">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="" class="mt-5"> Select tags</label>
                    <select class="js-example-basic-multiple custom-input" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-5">
                    <label for="start">Schedule Post date:</label>
                    <input type="datetime-local" id="start" class="custom-input" name="post_schedule_time"
                           value=""
                           max="2028-12-31">
{{--                    <input type="date" id="start" class="custom-input" name="date"--}}
{{--                           value=""--}}
{{--                           max="2028-12-31">--}}
                </div>

                <div class="mt-4">
                    <input type="checkbox" class="" id="is_published" name="published" value="1">
                    <label for="">Publish</label>
                </div>


                <button class="bg-green-600 text-sm rounded text-white p-2 uppercase mt-4 px-6 py-2 font-semibold">save
                </button>
            </div>


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
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endpush
