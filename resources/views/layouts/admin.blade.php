<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
    @stack('styles')

</head>

<body>
<div id="app" class="flex">
    <x-admin.sidebar/>
    <div class="w-4/5 bg-gray-200">
        <div class="flex bg-gray-800 p-2 items-center">
            <div class="w-4/12">
                <h1 class="text-white text-2xl uppercase font-sans font-light">{{str_replace('admin/','',request()->path())}}</h1>
            </div>
            <div class="w-4/12">
                <input type="text" name
                       class="bg-transparent border-b transition-colors duration-300 w-3/4 text-gray-400 focus:border-green-500"
                       placeholder="Search..." id/>
            </div>
            <div class="w-4/12">
                <div class="text-right">
                    <a href="/" class="text-white">Visit Site</a>
                </div>
            </div>
        </div>
        <div class="container p-5">
            @yield('content')
        </div>
    </div>
</div>
@stack('before_main_scripts')
<script src="{{asset('js/admin.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
@stack('after_main_scripts')
</body>
</html>
