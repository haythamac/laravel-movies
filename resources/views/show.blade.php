@extends('layouts.main')

@section('content')
{{-- Movie Details Section --}}
<div x-data="{ isOpen: false }">
    <div class="movie-info border-b border-gray-700">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{ "https://image.tmdb.org/t/p/w500/".$movie['poster_path'] }}" alt="poster" class="w-96 mx-auto md:mx-0 md: mb-4">
            <div class="flex flex-col md:ml-24 mx-auto">
                <div class="title text-5xl font-semibold">{{ $movie['title'] }}</div>
                <div class="flex flex-wrap mt-4 text-sm text-gray-400">
                    <span>⭐</span>
                    <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span class="mx-2">Comedy, Romance</span>
                </div>
                <div class="mt-8 pr-16">
                {{ $movie['overview'] }}
                </div>
                <div class="mt-24 font-semibold text-lg text-orange-400">
                    Featured Casts
                </div>
                <div class="flex mt-4 items-center">
                    @foreach ($movie['credits']['crew'] as $crew)
                        @if ($loop->index < 2)
                            <div class="mr-16 flex flex-col">
                                <span>{{ $crew['name'] }}</span>
                                <span class="text-sm text-gray-300">{{ $crew['job'] }}</span>
                            </div>
                        @endif
                    @endforeach
                </div>

                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-16">
                        <button @click="isOpen = true" @keydown.escape.window="isOpen = false"
                            class="rounded-md bg-orange-400 w-64 h-16 p-4 text-gray-900 font-semibold text-lg mx-auto md:mx-0 hover:bg-orange-500 transition-ease-in-out duration-300">
                            Watch trailer
                        </button>
                    </div>
                @endif

            </div>
        </div>
    </div>

    <div class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" style="background-color: rgba(0,0,0,0.5);" x-show="isOpen" x-transition.opacity>
        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
            <div class="bg-gray-900 rounded">
                <div class="flex justify-end pr-4 pt-2">
                    <button class="text-3xl leading-none hover:text-gray-300" @click="isOpen = false">&times;</button>
                </div>
                <div class="modal-body px-8 py-8">
                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%;">
                        <iframe width="560" height="315" 
                            src="{{ 'https://www.youtube.com/embed/'.$movie['videos']['results']['0']['key'] }}" 
                            class="resposive-container absolute top-0 left-0 w-full h-full" style="border:0;" 
                            allow="autoplay; encrypted-media" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Movie Details End --}}

{{-- Movie Casts Section --}}
<div class="movie-casts container mx-auto px-4 py-16 flex border-b border-gray-700">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-16 mx-auto md:mx-0">
        @foreach ($movie['credits']['cast'] as $cast)
            @if ($loop->index < 5)
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ "https://image.tmdb.org/t/p/w500/".$cast['profile_path'] }}" alt="movie actor" class="w-64 h-96 object-cover hover:opacity-75 transition-ease-in-out duration-500">
                    </a>
                    <div class="flex flex-col">
                        <span class="mt-2 text-lg tracking-wide text-orange-400">{{ $cast['name'] }}</span>
                        <span class="text-gray-300 ">{{ $cast['character'] }}</span>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>


{{-- Movie Casts End --}}

{{-- Movie Images Section --}}
<div class="movie-images container mx-auto px-4 py-16 flex">
    <div class="grid grid-cols-1 sm:grid-cols-2  lg:grid-cols-3 gap-8 md:gap-16 mx-auto md:mx-0">
        @foreach ($movie['images']['backdrops'] as $image)
            @if ($loop->index < 9)
                <div class="mt-8">
                    <a href="#">
                        <img src="{{ "https://image.tmdb.org/t/p/w500/".$image['file_path'] }}" alt="movie image" class="hover:opacity-75 transition-ease-in-out duration-500">
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</div>
{{-- Movie Images End --}}



@endsection