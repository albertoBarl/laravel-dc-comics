@extends('layouts.app')

@section('content')
    <div id="singleCard">

        {{-- section 1 --}}
        <div id="sect1">
            <div class="container">
                <img class="card" src="{{ $comic['thumb'] }} " style="width: 200px">
            </div>
        </div>

        {{-- section 2 --}}
        <div id="sect2">
            <div class="container d-flex justify-content-center">
                <div class="row justify-content-center">

                    {{-- description --}}
                    <div class="col-7">
                        {{-- title --}}
                        <h3 class="text-uppercase">{{ $comic['title'] }}</h3>

                        {{-- price --}}
                        <div class="form-control d-flex justify-content-between my-3">
                            <div class="tprice d-flex justify-content-between align-items-center w-100 px-3">
                                <span>U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></span>
                                <span>AVAILABLE</span>
                            </div>
                            <div class="dropdown">
                                <button class="btn border-0 dropdown-toggle text-white" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Check Availability
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Option n</a></li>
                                    <li><a class="dropdown-item" href="#">Option n</a></li>
                                    <li><a class="dropdown-item" href="#">Option n</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- description --}}
                        <p>{{ $comic['description'] }}</p>
                    </div>

                    {{-- adv --}}
                    <div class="col-4">
                        <label>ADVERTISEMENT</label>
                        <a href="/">
                            <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="ADV">
                        </a>
                    </div>

                </div>
            </div>
        </div>

        {{-- sectin 3 --}}
        <div id="sect3">
            <div class="container py-5">
                <div class="row justify-content-center">
                    {{-- talent --}}
                    <div class="col-6">
                        <h4>Talent</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Art by:</th>
                                    <td>
                                        <a href="/">{{ $comic['artists'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Written by:</th>
                                    <td>
                                        <a href="/">{{ $comic['writers'] }}</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- specs --}}
                    <div class="col-6">
                        <h4>Specs</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Series:</th>
                                    <td class="text-uppercase"><a href="/">{{ $comic['series'] }}</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">U.S. Price:</th>
                                    <td>{{ $comic['price'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">On Sales Date:</th>
                                    <td>{{ $comic['sale_date'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- footcards --}}
            <div class="feet d-flex justify-content-center gap-5">
                @foreach ($footcard as $item)
                    <a href="/" class="d-flex gap-3">
                        <p class="text-uppercase" style="color: grey">{{ $item['label'] }}</p>
                        <img src="{{ Vite::asset("resources/images/{$item['logo']}") }}" alt="not available"
                            style="height:50px; filter:brightness(0.5)">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
