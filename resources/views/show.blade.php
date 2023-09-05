@extends('layouts.main')

@section('content')
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
                    <a href="{{ 'https://youtube.com/watch?v='.$movie['videos']['results']['0']['key'] }}" target="_blank" class="rounded-md bg-orange-400 w-64 h-16 p-4 text-gray-900 font-semibold text-lg mx-auto md:mx-0 hover:bg-orange-500 transition-ease-in-out duration-300">
                        Watch trailer
                    </a>
                </div>
            @endif

        </div>
    </div>
</div>
<div class="movie-casts container mx-auto px-4 py-16 flex">
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
@endsection