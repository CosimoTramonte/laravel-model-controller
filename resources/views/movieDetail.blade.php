@extends('layout.main')

@section('content')

    <div class="container py-5">

        <div class="card" style="width: 18rem;">

            <img src="{{$movie->url_image}}" class="card-img-top" alt="...">

            <div class="card-body">

                <h2 class="card-title">{{$movie->title}}</h2>
                <h6>{{$movie->original_title}}</h6>

                <p>Nationality : {{$movie->nationality}} | Vote : {{$movie->vote}} | Date : {{ $movie->date }}</p>

                <a href="{{route('movies')}}" class="btn btn-primary">All Movies</a>
            </div>

        </div>

    </div>


@endsection
