@extends('layouts.admin')
@section('content')

    <div class="text-right">
    </div>
    <div class="bg-white shadow rounded-sm">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
            <th class="table-heading">Name</th>
            <th class="table-heading">Email</th>
            <th class="table-heading">Message</th>
            <th class="table-heading">actions</th>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($messages->items() as $message)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$message->name}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$message->email}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <div class="text-sm leading-5 text-gray-800">{{$message->message}}</div>
                    </td>
                    <td class="flex items-center my-2">
                        <a href=""
                           class="bg-indigo-600 rounded text-white px-4 py-1 hover:bg-indigo-700">View</a>
                        <form method="post" class="ml-2" action="">
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
                        <span class="font-medium">{{$messages->firstItem() ?? 0}}</span>
                        to
                        <span class="font-medium">{{$messages->lastItem() ?? 0}}</span>
                        of
                        <span class="font-medium">{{$messages->count()}}</span>
                        results
                    </p></div>

            </div>
        </div>
    </div>
@endsection
