@extends('layouts.app')

@section('content')
    <div id="comiclist" class="d-flex justify-content-center flex-column align-items-center">
        <div class="container d-flex justify-content-center flex-wrap gap-5">
            <section>
                <h3>current series</h3>
            </section>
            @foreach ($comics as $card)
                <a href="{{ route('comics.show', ['comic' => $card->id]) }}" class="text-white">
                    <div class="card bg-transparent border-0" style="width: 200px">
                        <img src="{{ $card['thumb'] }}" class="card-img-top" alt="{{ $card['title'] }}">
                        <p class="card-title text-uppercase">{{ $card['title'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
        <button class="btn px-5">
            load more
        </button>

    </div>

    {{-- footcards --}}
    <div class="footcards d-flex align-items-center justify-content-center gap-5 p-3">
        @foreach ($footcard as $item)
            <a href="/">
                <div class="d-flex align-items-center gap-2">
                    <div>
                        <img src="{{ Vite::asset("resources/images/{$item['logo']}") }}" alt="not available"
                            style="width: 50px;">
                    </div>
                    <p class="text-white text-uppercase">{{ $item['label'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
