<div class="relative mt-4 md:mt-0">
    <input wire:model.live.debounce.500="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1" placeholder="Search">
    <div class="absolute top-2 left-2">
        <img src="{{ '/storage/img/search.png' }}" alt="search icon">
    </div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64">
            @if (count($searchResult) > 0)
                <ul>
                    @foreach ($searchResult as $result)
                        <li class="border-t border-gray-700">
                            <a href="{{ route("movies.show", $result['id']) }}" class="hover:bg-gray-700 px-3 py-3 flex items-center">
                                @if ($result['poster_path'])
                                    <img src="{{ "https://image.tmdb.org/t/p/w92/".$result['poster_path'] }}" alt="poster" class="w-10"> 
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">    
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{$search}}"</div>
            @endif
        </div>
    @endif
</div>
