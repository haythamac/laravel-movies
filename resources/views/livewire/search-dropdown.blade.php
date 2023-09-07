<div class="relative mt-4 md:mt-0">
    <input wire:model.live.debounce-500="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1" placeholder="Search">
    <div class="absolute top-2 left-2">
        <img src="{{ '/storage/img/search.png' }}" alt="search icon">
    </div>
    <div class="absolute bg-gray-800 text-sm rounded w-64">
        @if (count($searchResult) > 0)
            <ul>
                @foreach ($searchResult as $result)
                    <li class="border-t border-gray-700"><a href="{{ route("movies.show", $result['id']) }}" class="block hover:bg-gray-700 p-2">{{ $result['title'] }}</a></li>
                @endforeach
            </ul>
        @else
            <div class="px-3 py-3">No results for "{{$search}}"</div>
        @endif
    </div>
</div>
