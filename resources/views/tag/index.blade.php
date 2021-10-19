@extends('layouts.admin')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert successAlert my-4" role="alert">
            <div class="flex">
                <button type="button" class="close mx-4" data-dismiss="alert">×</button>
                <div>
                    <p class="font-bold">{{ $message }}</p>
                </div>
            </div>
        </div>
    @endif
    <div class="text-right">
        <a href="/admin/tags/create"
           class="inline-block bg-blue-500 text-sm rounded text-white p-2 uppercase hover:bg-blue-600 mb-3">Create New
        </a>
    </div>
    <div class="bg-white shadow rounded-sm">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
            <th class="table-heading">Names</th>
            <th class="table-heading">actions</th>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($tags->items() as $tag)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$tag->name}}</div>
                    </td>
                    <td class="flex items-center my-2">
                        <a href="{{route('tags.edit',['tag' => $tag ])}}"
                           class="bg-indigo-600 rounded text-white px-4 py-1 hover:bg-indigo-700">Edit</a>
                        <form method="post" class="ml-2" action="{{route('tags.destroy',$tag->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit"
                                    class="bg-red-600 rounded text-white px-4 py-1 hover:bg-red-700">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            <div class="px-5">
                {{ $tags->links() }}
            </div>
        </div>
    </div>
@endsection
