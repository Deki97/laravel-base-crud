@extends('layouts.app')

@section('main_content')
<div class="container">
    <h1 class="text-center">Add New Comic</h1>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')


        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title..." name="title">
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Add description..."></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image Url</label>
            <input type="text" class="form-control" id="thumb" placeholder="Image Url..." name="thumb">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" placeholder="Price..." name="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" placeholder="Title..." name="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" placeholder="Sale Date..." name="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Type..." name="type">
        </div>

        <button type="submit" class="btn btn-primary">Add Comic</button>
    </form>
</div>
@endsection