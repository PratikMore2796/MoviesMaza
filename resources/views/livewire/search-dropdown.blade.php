<div >

    <input wire:model.debounce.55ms="search" type="text" style="background-color: #000000;
    padding-bottom: 10px;
    border-bottom: white 1px solid;
max-width: 100%"  class=" rounded-full w-64 px-4 pl-8 py-1 focus:outline-none   focus:outline-none focus:shadow-outline" placeholder="Search">



    @if(strlen($search) >= 2)
        <div class="absolute  text-sm rounded w-64 mt-4" style="background-color: #000000;">
            @if($searchResults-> count() > 0)
                <ul>
                    @foreach($searchResults as $results)

                        <li class="border-b border-gray-700">
                            <a href="{{ route('movies.show', $results['id']) }}" class="block hover:bg-purple-700 px-3 py-3 flex items-center">
                                @if($results['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $results['poster_path'] }}" alt="movie poster" class="w-8">
                                    @else
                                    <img src="https://via.placeholder.com/50x75" alt="movie poster" class="w-8">
                                @endif
                                <span class="ml-4">{{ $results['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
