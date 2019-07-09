<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Prata&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/de93c2514e.js"></script>


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
                    @if(\Route::is('index'))
                    <a href="/#myWork"><h4 class="text-rocket-green">My Work</h4></a>
                    @else
                    <a href="/#myWork"><h4 class="text-rocket-green hidden">My Work</h4></a>
                    @endif
                </div>
                <div class="w-1/2">
                    @if(\Route::is('index'))
                <a href="{{route('contact.get')}}" class="border-2 border-rocket-green text-rocket-green hover:text-white rounded-lg px-2 bg-transparent hover:bg-rocket-green py-2">Get in touch</a>
                @else
                <a href="/" class="border-2 border-rocket-green text-rocket-green hover:text-white rounded-lg px-2 bg-transparent hover:bg-rocket-green py-2">Back</a>
                @endif
                </div>
            </div>
        </div>
    </div>
    @yield('content')

    <div class="bg-rocket-green">
        <div class="container mx-auto flex justify-center py-8">
            <div class="text-gray-100">
                <h2 class="text-gray-100 text-xl mb-2">Thanks for dropping by, please connect with me on:</h2>
                <p class=""><i class="fal fa-at mr-4"></i>ptiernan@gmail.com</p>
                <p><i class="fab fa-twitter mr-4"></i> <a href="https://twitter.com/PhPete1" target="_blank" class="no-underline hover:text-gray-300">Twitter</a> </p>
                <p><i class="fab fa-github mr-4"></i> <a href="https://github.com/pt-phone-home" target="_blank" class="no-underline hover:text-gray-300">GitHub</a> </p>
                
            </div>

        </div>
    </div>
    
    @section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
    @show
</body>
</html>