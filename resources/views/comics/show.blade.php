@extends('layouts.app')

@section('main_content')

    <div class="card">
        <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $comic->title }}</h5>
          <div>Price: {{ $comic->price }} </div>
          <div>Series: {{ $comic->series }} </div>
          <div>On Sale: {{ $comic->sale_date }} </div>
          <p class="card-text">{{!! $comic->description !!}} </p>
          <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modify</a>
        </div>
      </div>
@endsection