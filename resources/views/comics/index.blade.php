@extends('layouts.app')

@section('main_content')
    <h1>List of Comics</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>Title: {{ $comic->title }}</h2>
            <div>Series: {{ $comic->series }}</div>
            <div>Price: {{ $comic->price }}</div>
        </div>
    @endforeach
@endsection