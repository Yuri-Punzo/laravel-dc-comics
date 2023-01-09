@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Edit Comic: {{$comic->title}}</h1>
    @include('partials.errors')
    <form action="{{route('comics.update', $comic->id)}}" method="post" class="card p-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="titleHlper" value="{{old('title', $comic->title)}}">
            <small id="titleHlper" class="text-muted">Add the product title here</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Product Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="thumbHlper" value="{{old('thumb', $comic->thumb)}}">
            <small id=" thumbHlper" class="text-muted">Add the product thumb here</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{old('description', $comic->description)}}</textarea>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="" aria-describedby="seriesHlper" value="{{old('series', $comic->series)}}">
            <small id="seriesHlper" class="text-muted">Add the product series here</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="" aria-describedby="priceHlper" value="{{old('price', $comic->price)}}">
            <small id="priceHlper" class="text-muted">Add the product price here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="" aria-describedby="sale_dateHlper" value="{{old('sale_date', $comic->sale_date)}}">
            <small id="sale_dateHlper" class="text-muted">Add the product sale date here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="" aria-describedby="typeHlper" value="{{old('type', $comic->type)}}">
            <small id="typeHlper" class="text-muted">Add the product type here</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection