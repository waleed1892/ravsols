@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="{{asset('highlight/styles/monokai.min.css')}}">
@endpush
@section('content')
    <div class="bg-white shadow rounded-sm px-6 py-8">
        <form id="postForm" enctype="multipart/form-data" method="post" action="{{route('tags.store')}}">
            @csrf
            <div>
                <input class="custom-input" placeholder="Tag name" type="input" name="name"/>
                <button type="submit" class="bg-green-600 text-sm rounded text-white p-2 uppercase mt-4 px-6 py-2 font-semibold">save
                </button>
            </div>
        </form>
    </div>
@endsection
@push('before_main_scripts')
    <script src="{{asset('highlight/highlight.min.js')}}"></script>

@endpush
@push('after_main_scripts')
    <script>
    </script>

@endpush
