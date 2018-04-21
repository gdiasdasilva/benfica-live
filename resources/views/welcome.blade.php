@extends('layouts.app')

@section('pageTitle', 'Homepage')

@section('content')

<div class="welcome-page">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="benfica-header-logo">
                <img src="{{ asset('images/slb-logo-new.svg') }}" alt="Benfica logo">
            </div>
            <p class="lead">O <strong>benfica.live</strong> foi criado com o intuito de promover a partilha de espaços utilizados por benfiquistas, em Portugal e no estrangeiro, para assistir aos jogos do Sport Lisboa e Benfica.</p>
            <p class="lead">Se souberes de algum sítio que transmita os jogos do Benfica, recomenda a todos os outros benfiquistas! A plataforma é mantida por adeptos e para adeptos.</p>
            <p class="lead">A plataforma conta já com <strong>{{ $spotsCount }}</strong> spots, em <strong>{{ $countriesCount }}</strong> países diferentes.</p>
        </div>
    </div>

    <h2>Últimos spots submetidos</h2>

    <div class="row last-submissions">
        @foreach ($recentSpots as $spot)
            <div class="col-md-4 last-submission-entry">
                <div class="card">
                    <a href="{{ route('spots.show', ['countrySlug' => $spot->country->slug_pt, 'spotSlug' => $spot->slug]) }}">
                        @if ($spot->image)
                            <img class="card-img-top" src="{{ $spot->image }}" alt="Imagem do spot">
                        @else
                            <img class="card-img-top" src="images/placeholder-restaurante.jpeg" alt="Imagem do spot">
                        @endif
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{ $spot->name }}</h4>
                        <p class="card-text">{{ $spot->city }}, {{ $spot->country->name_pt }}</p>
                        <a href="{{ route('spots.show', ['countrySlug' => $spot->country->slug_pt, 'spotSlug' => $spot->slug]) }}" class="btn btn-danger-inverted">Ver mais</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12 submit-spot-container">
            <a href="{{ route('spots.create') }}" class="submit-spot-button">
                <button type="button" name="button" class="btn btn-lg btn-danger">Submeter um spot</button>
            </a>
        </div>
    </div>
</div>

@endsection
