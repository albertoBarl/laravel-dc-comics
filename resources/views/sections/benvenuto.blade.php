@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h2>BENVENUTI IN DC COMICS!</h2>
        <div>
            <p>Click the button to see our catalogue.</p>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">START!</a>
        </div>

    </div>
@endsection
