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
        <a href="/admin/projects/create"
           class="inline-block bg-blue-500 text-sm rounded text-white p-2 uppercase hover:bg-blue-600 mb-3">Create New
        </a>
    </div>
    <div class="bg-white shadow rounded-sm">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
            <th class="table-heading">title</th>
            <th class="table-heading">link</th>
            <th class="table-heading">Featured</th>
            <th class="table-heading">actions</th>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($projects->items() as $project)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$project->title}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$project->link}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$project->featured=='1'?'true':'false'}}</div>
                    </td>
                    <td class="flex items-center my-2">
                        <a href="{{route('projects.edit',['project' => $project ])}}"
                           class="bg-indigo-600 rounded text-white px-4 py-1 hover:bg-indigo-700">Edit</a>
                        <form method="post" class="ml-2" action="{{route('projects.destroy',$project->id)}}">
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
        <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
            <div class="flex-1 flex justify-between sm:hidden">
                <button href="#"
                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Previous
                </button>
                <button href="#"
                        class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next
                </button>
            </div>
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div><p class="text-sm leading-5 text-gray-700">
                        Showing
                        <span class="font-medium">{{$projects->firstItem() ?? 0}}</span>
                        to
                        <span class="font-medium">{{$projects->lastItem() ?? 0}}</span>
                        of
                        <span class="font-medium">{{$projects->count()}}</span>
                        results
                    </p></div>

            </div>
        </div>
    </div>
@endsection
