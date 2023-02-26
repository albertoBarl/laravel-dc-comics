<div id="footer">
    {{-- voices --}}
    <div id="voices">
        <div class="container">
            <div class="voicesSect">
                @foreach ($sections as $section)
                    <div class="singleVoice">
                        <h4 class="text-white text-uppercase">{{ $section['label'] }}</h4>
                        <ul class="list-unstyled">
                            @foreach ($section['links'] as $item)
                                <li><a href="." style="color: grey">{{ $item }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="rightsSect" style="color: grey
            ">All Site Content TM and C 2020 DC Entertainment,
                unless otherwise <a href="/">noted here</a>.
                All
                rights reserved. <br> <a href="/">Cookies Settings</a></div>

        </div>
    </div>

    {{-- depp-footer --}}
    <div id="deepfooter">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <div>
                <button class="btn">SIGN-UP NOW!</button>
            </div>
            <div class="d-flex align-items-center justify-content-end gap-3">
                <label>FOLLOW US</label>
                <div class="d-flex align-items-center gap-2">
                    <a href="/">
                        <div><img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="FB">
                        </div>
                    </a>
                    <a href="/">
                        <div><img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="TW">
                        </div>
                    </a>
                    <a href="/">
                        <div><img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="YT">
                        </div>
                    </a>
                    <a href="/">
                        <div><img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="PI">
                        </div>
                    </a>
                    <a href="/">
                        <div><img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="PE">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
