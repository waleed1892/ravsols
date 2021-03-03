<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>

<body>
<div id="app" class="flex">
    <x-admin.sidebar/>
    <div class="w-4/5 bg-gray-200">
        <div class="flex bg-gray-800 p-2 items-center">
            <div class="w-1/4">
                <h1 class="text-white text-2xl uppercase font-sans font-light">{{str_replace('admin/','',request()->path())}}</h1>
            </div>
            <div class="w-2/4">
                <input type="text" name
                       class="bg-transparent border-b transition-colors duration-300 w-3/4 text-gray-400 focus:border-green-500"
                       placeholder="Search..." id/>
            </div>
            <div class="w-1/4 flex flex-wrap">
                <div class="relative navbar-icon">
                    {{--                    <fa size="lg" class="fill-current text-gray-600" :icon="['fas', 'comments']"></fa>--}}
                    {{--                    <span class="rounded-full w-3 h-3 bg-green-500 absolute"></span>--}}
                </div>
                <div class="relative navbar-icon ml-3">
                    {{--                    <fa size="lg" class="fill-current text-gray-600" :icon="['fas', 'bell']"></fa>--}}
                    {{--                    <span class="rounded-full w-3 h-3 bg-green-500 absolute"></span>--}}
                </div>
            </div>
        </div>
        <div class="container p-5">
            @yield('content')
        </div>
    </div>
</div>
<script src="{{asset('js/admin.js')}}"/>
</body>

</html>
