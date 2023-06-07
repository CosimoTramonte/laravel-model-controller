@extends('layout.main')

@section('content')

    <div class="container d-flex flex-wrap py-5">

        @foreach ($movies as $movie)

            <div class="card" style="width: 18rem;">

                <img src="{{$movie->url_image}}" class="card-img-top" alt="...">

                <div class="card-body">

                    <h2 class="card-title">{{$movie->title}}</h2>
                    <h6>{{$movie->original_title}}</h6>

                    <p>Vote : {{$movie->vote}}</p>

                    <a href="{{route('movieDetail')}}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>

        @endforeach

    </div>

@endsection
