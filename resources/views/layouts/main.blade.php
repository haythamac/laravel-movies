<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films Artisan</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-700 text-white">
        <div class="container flex flex-col md:flex-row mx-auto items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route("movies.index") }}"><img src="{{ "/storage/img/pop-corn.png" }}" width="40" height="40" alt="films artisan website logo"></a>
                </li>
                <li class="md:ml-12 mt-4 md:mt-0"><a href="{{ route("movies.index") }}" class="hover:text-gray-300">Movies</a></li>
                <li class="md:ml-12 mt-4 md:mt-0"><a href="#" class="hover:text-gray-300">TV Shows</a></li>
                <li class="md:ml-12 mt-4 md:mt-0"><a href="#" class="hover:text-gray-300">Actors</a></li>
            </ul>
            <ul class="flex flex-col md:flex-row items-center">
                <div class="relative mt-4 md:mt-0">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1" placeholder="Search">
                    <div class="absolute top-2 left-2">
                        <img src="{{ "/storage/img/search.png" }}" alt="search icon" >
                    </div>
                </div>
                <div class="md:ml-4 mt-4 md:mt-0">
                    <a href="#">
                        <img src="{{ "/storage/img/314921086_670015391398229_4341684705409050703_n.jpg" }}" alt="profile picture" class="rounded-full object-cover w-10 h-10">
                    </a>
                </div>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>