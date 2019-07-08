<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Prata&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f4c7a79518.js"></script>


    <title>@yield('title')</title>
</head>
<body class="font-body">
    <div class="w-full pb-4">
        <div class="container mx-auto pt-4 flex justify-between">
            <div>
                <a href="/"><img src="/images/logo.png" alt="" class="object-contain h-12 w-auto"></a>
            </div>
            <div class="flex items-center w-1/3">
                <div class="w-1/2">
                    <a href="/#myWork"><h4 class="text-rocket-green">My Work</h4></a>
                </div>
                <div class="w-1/2">
                    <a href="#" class="border-2 border-rocket-green text-rocket-green hover:text-white rounded-lg px-2 bg-transparent hover:bg-rocket-green py-2">Get in touch</a>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    
    @section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
    @show
</body>
</html>