@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        @forelse ($movies as $movie)
        <div class="col-md-4 mb-4">
            <div class="card card-custom">
                <div class="card-header">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p class="card-text"><strong>Original Title:</strong> {{$movie->original_title}}</p>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Nationality:</strong> {{$movie->nationality}}</p>
                    <p class="card-text"><strong>Date:</strong> {{$movie->date}}</p>
                    <p class="card-text"><strong>Vote:</strong> {{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <div class="alert alert-warning" role="alert">
                No movies found. 😢
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection
