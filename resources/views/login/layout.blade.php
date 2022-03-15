<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="bg-gray-100 w-screen h-screen" style="background-image: url('https://www.pngkey.com/png/full/48-483820_background-png-patterns-transparent-pattern-background-png.png')">
        @yield('content')
    </div>
</body>
</html>