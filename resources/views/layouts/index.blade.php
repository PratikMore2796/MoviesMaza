@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-8 p-6 ">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-lg font-semibold">Popular Movies</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($popularMovies as $popularMovie)
                <x-movie-card :popularMovie="$popularMovie" :genres="$genres"/>
                @endforeach

        </div>
        <div class="container mx-auto px-4 pt-16">
            <h2 class="uppercase tracking-wider text-lg font-semibold">Top Rated</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($toprated as $toprateds)
                <x-movie-card :popularMovie="$toprateds" :genres="$genres"/>
            @endforeach

        </div>
    </div>
    @endsection
