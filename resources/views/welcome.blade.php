@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container">
    <div class="row justify-content-center align-items-center py-5">
        @foreach ($movies as $singleMovie)
            <div class="col-2 py-3">
                <div class="card card-height">
                    <div class="card-body">
                      <h5 class="card-title">Titolo: {{$singleMovie['title']}}</h5>
                      <h6>Titolo originale: {{$singleMovie['original_title']}}</h6>
                      <ul class="list-unstyled">
                        <li>Nazionalità: {{$singleMovie['nationality']}}</li>
                        <li>Data: {{$singleMovie['date']}}</li>
                        <li>Voto: {{$singleMovie['vote']}}</li>
                      </ul>
                      <a href="{{ route('singlemovie', ['id' => $singleMovie->id]) }}" class="btn btn-primary">Info film</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
