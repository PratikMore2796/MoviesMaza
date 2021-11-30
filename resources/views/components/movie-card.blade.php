<div class="mt-8">
    <a href="{{ route('movies.show',$popularMovie['id']) }}">
        <img src="https://image.tmdb.org/t/p/w500/{{$popularMovie['poster_path']}}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150"/>
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show',$popularMovie['id']) }}" class="text-lg-mt-2 hover:text-gray:300">{{$popularMovie['title']}}</a>
        <div class="flex align-items-center text-gray-400 text-sm mt-1">
            <img src="https://img.icons8.com/fluency/20/000000/star.png" alt="star"/>
            <span class="ml-1">{{$popularMovie['vote_average'] * 10 .'%'}} </span>
            <span class="mx-2">| </span>
            <span>{{ \Carbon\Carbon::parse($popularMovie['release_date'])->format('M d, Y')}} </span>
        </div>
        <div class="text-gray-400">
            @foreach($popularMovie['genre_ids'] as $genre)
                {{ $genres->get($genre) }} @if(!$loop->last),@endif
            @endforeach
        </div>
    </div>

</div>
