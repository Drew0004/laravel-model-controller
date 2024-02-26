@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')
<h1>
    {{ $movie->title }}
</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
              <h6>Titolo originale: {{ $movie->original_title }}</h6>
              <ul class="list-unstyled">
                <li>Nazionalità: {{ $movie->nationality }}</li>
                <li>Data: {{ $movie->date }}</li>
                <li>Voto: {{ $movie->vote }}</li>
              </ul>
            </div>
          </div>
    </div>
</div>
@endsection