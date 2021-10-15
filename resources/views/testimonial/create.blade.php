@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="{{asset('highlight/styles/monokai.min.css')}}">
@endpush
@section('content')
    <div class="bg-white shadow rounded-sm px-6 py-8">
        @if ($errors->any())
            <div class="error-block" role="alert">
                <span class="block font-weight-bold sm:inline">Please Fill the form properly.</span>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><p><span class="block sm:inline">{{ $error }}</span></p></li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="postForm" enctype="multipart/form-data" method="post" action="{{route('testimonials.store')}}">
            @csrf
            <div>
                <input class="custom-input mt-4" placeholder="Name" type="input" name="name"/>
                <input class="custom-input mt-4" placeholder="Designation" type="input" name="designation"/>
                <input class="custom-input mt-4" placeholder="Company" type="input" name="company"/>
                <textarea rows="10" cols="50" class="custom-input mt-4" placeholder="Message" name="message"></textarea>
                <input id="imageInput" class="custom-input mt-4" accept="image/*" type="file" name="image">
                <div class="w-36 h-36 rounded bg-gray-100 mt-4 shadow-sm border border-gray-200">
                    <img class="w-full h-full object-contain" id="imagePreview"
                         src="https://via.placeholder.com/150x150?text=Add+image" alt="select iamge">
                </div>
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
        $(document).ready(function () {
            $("#imageInput").on('change', function (e) {
                const file = URL.createObjectURL(e.target.files[0])
                $('#imagePreview').attr('src', file)
            })
        });
    </script>
@endpush
