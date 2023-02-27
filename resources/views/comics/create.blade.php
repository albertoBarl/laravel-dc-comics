@extends('layouts.app')

@section('content')
    <div id="create-comic">
        <form action="{{ route('comics.store') }}" method="POST" class="d-flex flex-column justify-content-center p-5">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea rows="5" class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Series</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Sales date</label>
                <input type="date" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Type</label>
                <input type="text" class="form-control" name="type">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Add image</label>
                <input type="text" class="form-control" name="thumb">
            </div>
            <div class="form-group">

                <button type="submit" class="btn btn-primary">Crea il nuovo Comics</button>
            </div>
        </form>

    </div>
@endsection
