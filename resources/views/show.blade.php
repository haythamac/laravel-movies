@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-700">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="{{ "/storage/img/love-rosie.jpg" }}" alt="love rosie poster" class="w-96 mx-auto md:mx-0 md: mb-4">
        <div class="flex flex-col md:ml-24 mx-auto">
            <div class="title text-5xl font-semibold">Love, Rosie</div>
            <div class="flex flex-wrap mt-4 text-sm text-gray-400">
                <span>⭐</span>
                <span class="ml-1">83%</span>
                <span class="mx-2">|</span>
                <span>October 22, 2014</span>
                <span class="mx-2">|</span>
                <span class="mx-2">Comedy, Romance</span>
            </div>
            <div class="mt-8 pr-16">
                Best friends Rosie and Alex are suddenly separated when Alex and his family move from Dublin to America. Can their friendship survive years and distance? Will they gamble everything for true love?
            </div>
            <div class="mt-24 font-semibold text-lg text-orange-400">
                Featured Casts
            </div>
            <div class="flex mt-4 items-center">
                <div class="mr-16 flex flex-col">
                    <span>Christian Ditter</span>
                    <span class="text-sm text-gray-300">Director, Screenplay</span>
                </div>
                <div class="mr-16 flex flex-col">
                    <span>Juliette Towhidi</span>
                    <span class="text-sm text-gray-300">Screenplay</span>
                </div>
            </div>

            <button class="rounded-md bg-orange-400 w-64 h-16 mt-16 text-gray-900 font-semibold text-lg mx-auto md:mx-0">
                Watch now
            </button>
        </div>
    </div>
</div>
<div class="movie-casts container mx-auto px-4 py-16 flex">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-16 mx-auto md:mx-0">
        <div class="mt-8">
            <a href="#">
                <img src="{{ "/storage/img/lily.jpg" }}" alt="movie actor" class="w-64 h-96 object-cover hover:opacity-75 transition-ease-in-out duration-500">
            </a>
            <div class="flex flex-col">
                <span class="mt-2 text-lg tracking-wide text-orange-400">Lily Collins</span>
                <span class="text-gray-300 ">Rosie Dunne</span>
            </div>
        </div>
        <div class="mt-8">
            <a href="#">
                <img src="{{ "/storage/img/sam.jpg" }}" alt="movie actor" class="w-64 h-96 object-cover hover:opacity-75 transition-ease-in-out duration-500">
            </a>
            <div class="flex flex-col">
                <span class="mt-2 text-lg tracking-wide text-orange-400">Sam Claflin</span>
                <span class="text-gray-300 ">Alex Stewart</span>
            </div>
        </div>
        <div class="mt-8">
            <a href="#">
                <img src="{{ "/storage/img/suki.jpg" }}" alt="movie actor" class="w-64 h-96 object-cover hover:opacity-75 transition-ease-in-out duration-500">
            </a>
            <div class="flex flex-col">
                <span class="mt-2 text-lg tracking-wide text-orange-400">Suki Waterhouse</span>
                <span class="text-gray-300 ">Bethany Williams</span>
            </div>
        </div>
        <div class="mt-8">
            <a href="#">
                <img src="{{ "/storage/img/christian.jpg" }}" alt="movie actor" class="w-64 h-96 object-cover hover:opacity-75 transition-ease-in-out duration-500">
            </a>
            <div class="flex flex-col">
                <span class="mt-2 text-lg tracking-wide text-orange-400">Christian Cooke</span>
                <span class="text-gray-300 ">Greg</span>
            </div>
        </div>
        <div class="mt-8">
            <a href="#">
                <img src="{{ "/storage/img/laight.jpg" }}" alt="movie actor" class="w-64 h-96 object-cover hover:opacity-75 transition-ease-in-out duration-500">
            </a>
            <div class="flex flex-col">
                <span class="mt-2 text-lg tracking-wide text-orange-400">Lily Laight</span>
                <span class="text-gray-300 ">Katie Dunne</span>
            </div>
        </div>
    </div>
</div>
@endsection