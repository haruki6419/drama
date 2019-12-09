<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>

        @component('components.footer')
        @endcomponent
        <script src="{{ asset('js/app.js') }}"></script>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
    </body>
</html>
