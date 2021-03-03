@extends('layouts.admin')
@section('content')
    <div class="bg-white shadow rounded-sm px-6 py-8">
        <form enctype="multipart/form-data" method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="grid grid-cols-2 gap-6">
                <input
                    class="custom-input"
                    placeholder="Title" type="input" name="title"/>
                <div></div>
                <div class="col-span-2">
                    <textarea name="description" id="editor"></textarea>
                </div>
                <div>
                    <input name="image" type="file">
                </div>
            </div>
            <button class="bg-green-600 text-sm rounded text-white p-2 uppercase mt-4">save</button>
        </form>
    </div>
@endsection
