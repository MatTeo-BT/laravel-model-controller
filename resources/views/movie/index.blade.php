@extends('layouts.app')

@section('title', 'Movies')

@section('main-content')
<h1>
    Movies
</h1>
    <div class="container mt-5">
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>
                                {{ $movie->title }} - {{ $movie->original_title }}
                            </h3>
                        </div>
                        <p>
                            {{ $movie->nationality }}, {{ $movie->date }}, {{ $movie->vote }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection