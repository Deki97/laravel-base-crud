@extends('layouts.app')

@section('main_content')
    <h1>List of Comics</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>
                <a href="{{ route('comics.show', ['comic' => $comic->id ]) }}">Title: {{ $comic->title }}</a>
            </h2>
            <div>Series: {{ $comic->series }}</div>
            <div>Price: {{ $comic->price }}</div>
        </div>
    @endforeach
@endsection