@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <!-- Popular Movies Section -->
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Popular movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($popularMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres" />
            @endforeach
        </div>
    </div>
    <!-- Popular Movies End -->

    <div class="border-b border-gray-700 mt-10"></div> <!-- Section Break -->

    <!-- Now Playing Movies Section -->
    <div class="now-playing-movies mt-16">
        <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Now playing movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($nowPlayingMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres" />
            @endforeach
        </div>
    </div>
    <!-- Now Playing Movies End -->

    <div class="border-b border-gray-700 mt-10"></div> <!-- Section Break -->

    <!-- Upcoming Movies Section -->
    <div class="now-playing-movies mt-16">
        <h2 class="uppercase tracking-wider text-orange-400 text-lg font-semibold">Upcoming movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
            @foreach ($upcomingMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres" />
            @endforeach
        </div>
    </div>
    <!-- Upcoming Movies End -->
</div>
@endsection