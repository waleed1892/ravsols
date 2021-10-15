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
        <form id="postForm" enctype="multipart/form-data" method="post" action="{{route('projects.update',$project->id   )}}}">
            @csrf
            @method('PUT')
            <div>
                <input class="custom-input" placeholder="Title" type="input" value="{{$project->title}}" name="title"/>


                <input class="custom-input mt-4 " placeholder="Project Link" value="{{$project->link}}" type="input" name="link"/>

                <div class="mt-5">
                    <label for="" class="mt-5"> Select tags</label>
                    <select class="tags-multiple custom-input" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-5">
                    <label for="" class="mt-5"> Select technologies</label>
                    <select class="techs-multiple custom-input" name="technologies[]" multiple="multiple">
                        @foreach($techs as $tech)
                            <option value="{{$tech->id}}">{{$tech->title}}</option>
                        @endforeach
                    </select>
                </div>

                <input id="imageInput" class="custom-input mt-4" accept="image/*" type="file" name="image">
                <div class="w-36 h-36 rounded bg-gray-100 mt-4 shadow-sm border border-gray-200">
                    <img class="w-full h-full object-contain" id="imagePreview"
                         src="{{url("storage/images/".$project->image)}}" alt="select iamge">
                </div>

                <div class="mt-4">
                    <input
                        @if($project->featured ==1) checked=checked @endif
                        type="checkbox" class="" id="is_featured" name="featured" value="1">
                    <label for="">Featured</label>
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
    {{--    <script type="text/javascript" src="{{asset('js/postEditor.js')}}"></script>--}}
    <script>
        $(document).ready(function () {
            $("#imageInput").on('change', function (e) {
                const file = URL.createObjectURL(e.target.files[0])
                $('#imagePreview').attr('src', file)
            })

            $('.tags-multiple').select2();
            $('.tags-multiple').val(@json($projectTags)).trigger('change');

            $('.techs-multiple').select2();
            $('.techs-multiple').val(@json($projectTechs)).trigger('change');
        });
    </script>

@endpush

