<div id="full-header">
    {{-- PRE-HEADER --}}
    <div id="pre-header">
        <div class="container d-flex justify-content-end gap-3 text-white">
            <p>DC POWER VISA</p>
            <div class="dropdown">
                <p class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ADDITION DC SITES
                </p>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Option n</a></li>
                    <li><a class="dropdown-item" href="#">Option n</a></li>
                    <li><a class="dropdown-item" href="#">Option n</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- HEADER --}}
    <div id="header">
        <nav class="container d-flex justify-content-between align-items-center py-3">

            {{-- logo --}}
            <div id="logo">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="LOGO">
                </a>
            </div>

            {{-- menu --}}
            <div id="nav">
                <ul class="d-flex list-unstyled gap-3">
                    <li><a class="text-black" href="/">CHARACTERS</a></li>
                    <li><a class="text-black" href="/">COMICS</a></li>
                    <li><a class="text-black" href="/">MOVIES</a></li>
                    <li><a class="text-black" href="/">TV</a></li>
                    <li><a class="text-black" href="/">GAMES</a></li>
                    <li><a class="text-black" href="/">COLLECTIBLES</a></li>
                    <li><a class="text-black" href="/">VIDEOS</a></li>
                    <li><a class="text-black" href="/">FANS</a></li>
                    <li><a class="text-black" href="/">NEWS</a></li>
                    <li><a class="text-black" href="/">SHOP</a></li>
                </ul>
            </div>

            {{-- searchbar --}}
            <div id="searchbar">
                <div class="d-flex form-control bg-transparent">
                    <input type="text" name="search" placeholder="Search..." class="border-0">
                    <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </nav>
    </div>
</div>
{{-- jumbotron --}}
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="not available">
</div>
