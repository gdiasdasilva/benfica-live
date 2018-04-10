<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') | {{ config('app.name', 'Laravel') }}</title>

    <meta property="og:title" content="benfica.live | Partilha de Spots" />
    <meta property="og:description" content="O benfica.live foi criado com o intuito de promover a partilha de espaços utilizados por benfiquistas, em Portugal e no estrangeiro, para assistir aos jogos do Sport Lisboa e Benfica." />
    <meta property="og:image" content="{{ asset('images/BenficaLive-FacebookOG.png') }}"/>
    <meta name="og:image:width" content="1200"/>
    <meta name="og:image:height" content="630">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Parade of Fans for Houston’s Funeral">
    <meta name="twitter:description" content="O benfica.live foi criado com o intuito de promover a partilha de espaços utilizados por benfiquistas, em Portugal e no estrangeiro, para assistir aos jogos do Sport Lisboa e Benfica.">
    <meta name="twitter:image" content="{{ asset('images/BenficaLive-TwitterCard.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32.png') }}?v2" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-96x96.png') }}?v2" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-16x16.png') }}?v2" sizes="16x16">
    @yield('styles')
</head>
<body>
    <div id="app">
        @include('partials.navbar')
        @include('partials.status-messages')
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111780420-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-111780420-1');
    </script>
    @yield('scripts')
</body>
</html>
