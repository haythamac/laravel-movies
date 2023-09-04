@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Popular movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            <div class="mt-8">
                <a href="#">
                    <img src="{{ "/storage/img/home-alone.jpeg" }}" alt="home alone poster" class="hover:opacity-75 transition-ease-in-out duration-500">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Home Alone</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>⭐</span>
                        <span class="ml-1">66%</span>
                        <span class="mx-2">|</span>
                        <span>February 27, 1991</span>
                    </div>
                    <div class="text-gray-400 text-sm">Adventure, Children's film, Adventure</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ "/storage/img/love-rosie.jpg" }}" alt="love, rosie poster" class="hover:opacity-80 transition-ease-in-out duration-500">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Love, Rosie</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>⭐</span>
                        <span class="ml-1">83%</span>
                        <span class="mx-2">|</span>
                        <span>October 22, 2014</span>
                    </div>
                    <div class="text-gray-400 text-sm">Comedy, Romance</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img <img src="{{ "/storage/img/mamma-mia.jpg" }}" alt="mamma mia poster" class="hover:opacity-80 transition-ease-in-out duration-500">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Mamma Mia</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>⭐</span>
                        <span class="ml-1">82%</span>
                        <span class="mx-2">|</span>
                        <span>July 10, 2008</span>
                    </div>
                    <div class="text-gray-400 text-sm">Comedy, Jukebox musical, Musical, Romance</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ "/storage/img/crazy-stupid-love.jpg" }}" alt="crazy stupid love poster" class="hover:opacity-80 transition-ease-in-out duration-500">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Crazy, Stupid, Love</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>⭐</span>
                        <span class="ml-1">71%</span>
                        <span class="mx-2">|</span>
                        <span>August 17, 2011</span>
                    </div>
                    <div class="text-gray-400 text-sm">Comedy, Drama, Romance</div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#">
                    <img src="{{ "/storage/img/the-notebook.jpg" }}" alt="the notebook poster" class="hover:opacity-80 transition-ease-in-out duration-500">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-300">The notebook</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>⭐</span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>September 15, 2004</span>
                    </div>
                    <div class="text-gray-400 text-sm">Drama, Romance</div>
                </div>
            </div>

            <!-- <div class="mt-8">
                <a href="#">
                    <img src="{{ "/storage/img/love-rosie.jpg" }}" alt="love, rosie poster" class="">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ "/storage/img/mamma-mia.jpg" }}" alt="mamma mia poster" class="">
                </a>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ "/storage/img/crazy-stupid-love.jpg" }}" alt="crazy stupid love poster" class="">
                </a>
            </div> -->
        </div>
    </div>
</div>
@endsection