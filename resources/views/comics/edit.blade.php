@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Modify Comic</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
            @csrf
            @method('PUT')
    
    
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $comic->title }}">
            </div>
    
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description') ? old('description') : $comic->description }}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Image Url</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb') : $comic->thumb }}">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') ? old('price') : $comic->price }}">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') ? old('series') : $comic->series }}">
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}">
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') ? old('type') : $comic->type }}">
            </div>
    
            <button type="submit" class="btn btn-primary">Modify Comic</button>
        </form>
    </div>
@endsection