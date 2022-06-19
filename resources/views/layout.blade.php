<HTML>
    <HEAD>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/svg+xml">
        <link rel="apple-touch-icon" href="{{ asset('img/favicon.ico') }}">  <!-- 180×180 -->
        {{-- <link rel="manifest" href="manifest.webmanifest"> --}}
        {{-- {
            "icons": [
              { "src": "images/favicons/192.png", "type": "image/png", "sizes": "192x192" },
              { "src": "images/favicons/512.png", "type": "image/png", "sizes": "512x512" }
            ]
          } --}}

        {{-- <script type="js" src="{{ asset('js/app.js') }}"></script> --}}
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <title>@yield("title")</title>

    </HEAD>
    <body>
        <div class = "leftMainMenu">
            @once
                @include("layout/menu")
            @endonce
        </div>
        <div class="main">
            @yield("content")
        </div>
    </body>
</HTML>