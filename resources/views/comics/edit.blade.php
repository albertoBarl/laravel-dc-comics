@extends('layouts.app')

@section('content')
    <div id="create-comic">
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST"
            class="d-flex flex-column justify-content-center p-5">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" value="{{ $comic->title }}" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea rows="5" class="form-control" name="description">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" value="{{ $comic->price }}" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" value="{{ $comic->series }}" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sales date</label>
                <input type="date" class="form-control" value="{{ $comic->sale_date }}" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" value="{{ $comic->type }}" name="type">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Add image</label>
                <input type="text" class="form-control" value="{{ $comic->thumb }}" name="thumb">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Aggiorna il Comics</button>
            </div>
        </form>

    </div>
@endsection
