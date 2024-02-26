@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container">
    <div class="row justify-content-center align-items-center py-5">
        @foreach ($movies as $singleMovie)
            <div class="col-2 py-3">
                <div class="card card-height">
                    <h5 class="card-title p-3">Titolo: {{$singleMovie['title']}}</h5>
                    <div class="card-body">
                      <h6>Titolo originale: {{$singleMovie['original_title']}}</h6>
                      <ul class="list-unstyled">
                        <li>Nazionalità: {{$singleMovie['nationality']}}</li>
                        <li>Data: {{$singleMovie['date']}}</li>
                        <li>Voto: {{$singleMovie['vote']}}</li>
                      </ul>
                    </div>
                    <div class="p-3 text-center">

                        <a href="{{ route('singlemovie', ['id' => $singleMovie->id]) }}" class="btn my-btn">Info film</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
