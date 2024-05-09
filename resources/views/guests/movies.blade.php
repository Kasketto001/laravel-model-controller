@extends('layouts.app')


@section('content')

@forelse ($movies as $movie )

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">
                        {{$movie->title}}
                    </h3>
                    <p>{{$movie->original_title}}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <p>No movies here, sorry 😢</p>
        </div>
        @endforelse

@endsection