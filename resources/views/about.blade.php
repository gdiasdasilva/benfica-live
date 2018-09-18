@extends('layouts.app')
@section('pageTitle', 'Sobre nós')

@section('content')

<section class="section about-us">
    <div class="container">
        <div class="columns">
            <div class="column is-10 is-offset-1 content">
                <h1 class="title is-1">Sobre nós</h1>
                <p>O <strong>benfica.live</strong> surge da necessidade de centralizar a informação sobre locais (cafés, restaurantes) onde sejam transmitidos os jogos do Sport Lisboa e Benfica, em Portugal e pelo Mundo.</p>
                <p>Seja em viagem de trabalho, lazer ou durante um programa Erasmus, muitos benfiquistas têm dificuldade em encontrar locais que transmitam regularmente os jogos.</p>
                <p>A plataforma foi criada por adeptos e é para os adeptos. Qualquer pessoa tem a liberdade de submeter um local e contribuir para a comunidade.</p>

                <p>
                    <a href="{{ route('spots.create') }}" class="button is-success">
                        Sugerir um Spot
                    </a>
                </p>

                <p>Para mais informações, utiliza a página de <a href="{{ route('contacts.show') }}">contactos</a>.</p>

                <h2 class="title is-3">Detalhes técnicos</h2>
                <p>A plataforma é <i>open source</i> e qualquer pessoa pode deixar o seu contributo no repositório alojado
                    no <a href="https://github.com/gdiasdasilva/benfica-live" target="_blank" rel="noopener"><i class="fa fa-github"></i> Github.</a>
                </p>
                <p>Para o desenvolvimento são utilizadas as ferramentas mais recentes, como Laravel 5, Vue.js e Sass.</p>
                <p><em>Este projeto não tem qualquer ligação oficial com o Sport Lisboa e Benfica, sendo mantido por adeptos.</em></p>
            </div>
        </div>
    </div>
</section>

@endsection
