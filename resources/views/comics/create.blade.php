@extends('layouts.app')

@section('main_content')
<div class="container">
    <h1 class="text-center">Add New Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')


        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title..." name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Add description...">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image Url</label>
            <input type="text" class="form-control" id="thumb" placeholder="Image Url..." name="thumb" value="{{ old('thumb') }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Price..." name="price" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Title..." name="series" value="{{ old('series') }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" placeholder="Sale Date..." name="sale_date" value="{{ old('sale_date') }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Type..." name="type" value="{{ old('type') }}">
        </div>

        <button type="submit" class="btn btn-primary">Add Comic</button>
    </form>
</div>
@endsection