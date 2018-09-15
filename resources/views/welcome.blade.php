@extends('layouts.app')
@section('pageTitle', 'Início')
@section('content')

<section class="section introductory-text">
    <div class="container">
        <div class="columns">
            <div class="column is-10 is-offset-1 content">
                <div class="main-benfica-logo">
                    <img src="{{ asset('images/slb-logo-new.svg') }}" alt="Sport Lisboa e Benfica logo">
                </div>
                <p>O <strong>benfica.live</strong> foi criado com o intuito de promover a partilha de espaços utilizados por benfiquistas, em Portugal e no estrangeiro, para assistir aos jogos do Sport Lisboa e Benfica.</p>
                <p>Se souberes de algum sítio que transmita os jogos do Benfica, recomenda a todos os outros benfiquistas! A plataforma é mantida por adeptos e para adeptos.</p>
                <p>A plataforma conta já com <strong>{{ $spotsCount }}</strong> spots, em <strong>{{ $countriesCount }}</strong> países diferentes.</p>
            </div>
        </div>
    </div>
</section>

<section class="section featured-spots">
    <div class="container">
        <h3 class="title">Destaques</h3>
        <div class="columns">
            @foreach ($recentSpots as $spot)
                <div class="column is-4">
                    <a href="{{ route('spots.show', ['countrySlug' => $spot->country->slug_pt, 'spotSlug' => $spot->slug]) }}">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    @if ($spot->thumbnail_image)
                                        <img class="card-img-top" src="{{ $spot->thumbnail_image }}" alt="Imagem do spot">
                                    @endif
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">{{ $spot->name }} {{ $spot->country->emoji }}</p>
                                        <p class="subtitle is-6">
                                            {{ $spot->city }}, {{ $spot->country->name_pt }}
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <p>{{ $spot->address }}</p>
                                    <button class="button is-light">Ver mais</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class=" submit-new-spot">
    <div class="container">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <a href="{{ route('spots.create') }}" class="button is-danger is-medium is-fullwidth">
                    <span class="icon">
                        <i class="fa fa-upload"></i>
                    </span>
                    <span>Sugerir um spot</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
