@extends('master')

@section('title')
    Peter Tiernan | Contact Me
@endsection

@section('content')
<div>
    <div class="container mx-auto">
        <div class="flex my-4">
            <hr class=""> <div><img src="/images/logo.png" alt="" class="h-16"></div><hr>
        </div>
        <div class="flex justify-center py-6">
            <h2 class="font-display text-2xl">Want to work together? Have questions? <br>
                Get in touch</h2>
        </div>
        <div class="flex justify-center">
            <form action="" method="POST" class="w-full md:w-3/5 flex flex-col text-xl">
                @csrf
                <div class="w-full flex flex-wrap mb-4">
                    <div class="w-full md:w-1/2 px-2">
                        <label for="name" class="block text-gray-600 mb-1">Name:</label>
                        <input type="text" name="name" placeholder="Full Name" class="h-10 block w-full border border-gray-300 text-xs py-1 rounded pl-1 mb-2 md:mb-0" required>
                    </div>
                    <div class="w-full md:w-1/2 px-2">
                        <label for="email" class="block text-gray-600 mb-1">Email:</label>
                        <input type="email" name="email" placeholder="example@gmail.com" class="h-10 block w-full border border-gray-300 text-xs py-1 rounded pl-1" required>
                    </div>
                </div>
                <div class="w-full mb-4 px-2">
                    <label for="message" class="block text-gray-600 mb-1">Message:</label>
                    <textarea name="message" id="" cols="30" rows="10" class="border-2 border-gray-300 w-full rounded" required></textarea>
                </div>
                <div class="w-full mb-4 px-2">
                    <button type="submit" class="inline-block px-4 py-1 bg-rocket-green hover:bg-rocket-green-light text-gray-100 rounded">Send</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection