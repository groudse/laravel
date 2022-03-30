<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">

    <title>{{ Voyager::setting('site.title') }}</title>

</head>

<body>

    @include('layouts/partials/_nav')
    <div class="container mx-2 my-2">
        <!-- Le contenu de la page s'insère ici! -->
        @yield('content')

        @include('layouts/partials/_footer')
    </div>

</body>

</html>
