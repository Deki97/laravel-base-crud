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

          <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this item?')">Delete Comic</button>
          </form>

        </div>
      </div>
@endsection