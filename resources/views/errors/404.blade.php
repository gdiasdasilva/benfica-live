<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Página não encontrada | {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-16x16.png') }}" sizes="16x16">
    <style media="screen">
        img {
            width: 450px;
            margin-bottom: 30px;
            max-width: 80%;
        }

        .image-container {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('partials.header')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto image-container">
                    <img src="/images/renders/equipa.png" alt="Render da equipa">
                    <h3>
                        <strong>A página que procuras não foi encontrada!</strong>
                    </h3>
                    <p class="lead">
                        Aproveita e procura outros spots!
                    </p>
                    <a class="btn btn-danger" href="/paises">Listagem de Spots</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
