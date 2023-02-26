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
                    @foreach ($socials as $item)
                        <a href="/">
                            <div><img src="{{ Vite::asset("resources/images/{$item['logo']}") }}"
                                    alt="{{ $item['name'] }}">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
