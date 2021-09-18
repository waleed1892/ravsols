@extends('layouts.admin')
@section('content')
    <div class="text-right">
        <a href="/admin/posts/create"
           class="inline-block bg-blue-500 text-sm rounded text-white p-2 uppercase hover:bg-blue-600 mb-3">Create New
        </a>
    </div>
    <div class="bg-white shadow rounded-sm">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
            <th class="table-heading">title</th>
            <th class="table-heading">description</th>
            <th class="table-heading">actions</th>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($posts->items() as $post)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$post->title}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{!! $post->html_content !!}</div>
                    </td>
                    <td class="flex items-center my-2">
                        <a href="{{route('posts.edit',['post' => $post])}}"
                           class="bg-indigo-600 rounded text-white px-4 py-1 hover:bg-indigo-700">Edit</a>
                        <form method="post" class="ml-2" action="{{route('posts.destroy',$post->id)}}">
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
                        <span class="font-medium">{{$posts->firstItem() ?? 0}}</span>
                        to
                        <span class="font-medium">{{$posts->lastItem() ?? 0}}</span>
                        of
                        <span class="font-medium">{{$posts->count()}}</span>
                        results
                    </p></div>
                {{--                <div>--}}
                {{--                    <nav class="relative z-0 inline-flex shadow-sm">--}}
                {{--                        <button @if(!$prevPageUrl) disabled="disabled" @endif aria-label="Previous"--}}
                {{--                                class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 @if(!$prevPageUrl) cursor-not-allowed @endif">--}}
                {{--                            <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">--}}
                {{--                                <path fill-rule="evenodd"--}}
                {{--                                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"--}}
                {{--                                      clip-rule="evenodd"></path>--}}
                {{--                            </svg>--}}
                {{--                        </button>--}}
                {{--                        <button @if(!$nextPageUrl) disabled="disabled" @endif aria-label="Next"--}}
                {{--                                class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 @if(!$nextPageUrl) cursor-not-allowed @endif">--}}
                {{--                            <svg viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">--}}
                {{--                                <path fill-rule="evenodd"--}}
                {{--                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"--}}
                {{--                                      clip-rule="evenodd"></path>--}}
                {{--                            </svg>--}}
                {{--                        </button>--}}
                {{--                    </nav>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
