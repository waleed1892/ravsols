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
                    <img class="w-full h-full object-contain" id="imagePreview" src="" alt="">
                </div>
                <div class="mt-4">
                    <div id="postEditor"></div>
                </div>
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
@endpush
