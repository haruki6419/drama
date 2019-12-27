<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if(ENV('APP_ENV') == 'production')
          <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @else
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @endif
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>

        @component('components.footer')
        @endcomponent
        @if(ENV('APP_ENV') == 'production')
          <script src="{{ mix('js/app.js') }}"></script>
        @else
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @endif
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v5.0"></script>
    </body>
</html>
