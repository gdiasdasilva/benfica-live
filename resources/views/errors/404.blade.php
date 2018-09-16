<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=0">

        <title>Página não encontrada | {{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="icon" type="image/png" href="{{ asset('images/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon-96x96.png') }}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon-16x16.png') }}" sizes="16x16">
    </head>
    <body>
        <main>
            <section class="hero is-danger is-fullheight is-centered fourzerofour">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Bola ao lado!
                        </h1>
                        <h2 class="subtitle">
                            A página que procuras não foi encontrada.
                        </h2>
                        <a class="button is-danger is-inverted is-outlined" href="{{ route('home') }}">
                            Voltar à homepage
                        </a>
                    </div>
                </div>
                <img src="{{ asset('/images/renders/equipa.png') }}" alt="Render da equipa">
            </section>
        </main>
    </body>
</html>
