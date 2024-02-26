@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container">
    <div class="row">
        @foreach ($movies as $singleMovie)
            <div class="col-2">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Titolo: {{$singleMovie['title']}}</h5>
                      <h6>Titolo originale: {{$singleMovie['original_title']}}</h6>
                      <ul class="list-unstyled">
                        <li>Nazionalità: {{$singleMovie['nationality']}}</li>
                        <li>Data: {{$singleMovie['date']}}</li>
                        <li>Voto: {{$singleMovie['vote']}}</li>
                      </ul>
                      <a href="#" class="btn btn-primary">Info film</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
