<div class="relative mt-4 md:mt-0">
    <input wire:model="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1" placeholder="Search">
    <div class="absolute top-2 left-2">
        <img src="{{ '/storage/img/search.png' }}" alt="search icon">
    </div>
    <div class="absolute bg-gray-800 text-sm rounded w-64">
        <ul>
            <li class="border-t border-gray-700"><a href="#" class="block hover:bg-gray-700 p-2">{{ $search }}</a></li>
            <li class="border-t border-gray-700"><a href="#" class="block hover:bg-gray-700 p-2">Hello</a></li>
            <li class="border-t border-gray-700"><a href="#" class="block hover:bg-gray-700 p-2">Hello</a></li>
            <li class="border-t border-gray-700"><a href="#" class="block hover:bg-gray-700 p-2">Hello</a></li>
        </ul>
    </div>
</div>
