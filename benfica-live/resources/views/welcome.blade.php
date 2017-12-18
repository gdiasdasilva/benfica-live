@extends('layouts.app')

@section('content')

<div class="welcome-page">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="benfica-header-logo">
                <img src="{{ asset('images/slb-logo-new.svg') }}" alt="Benfica logo">
            </div>
            <p class="lead">O <strong>benfica.live</strong> foi criado com o intuito de promover a partilha de espaços utilizados por benfiquistas para assistir aos jogos do Sport Lisboa e Benfica pelo Mundo.</p>
            <p class="lead">Se souberes de algum sítio que transmita os jogos do Benfica, recomenda a todos os outros benfiquistas! A plataforma é mantida por adeptos e para adeptos.</p>
        </div>
    </div>

    <h2>Últimas submissões</h2>

    <div class="row">
        @foreach ($recent_spots as $spot)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="https://source.unsplash.com/380x200" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $spot->name }}</h4>
                        <p class="card-text">{{ $spot->city }}, {{ $spot->country->name }}</p>
                        <a href="{{ $spot->path() }}" class="btn btn-danger">Ver mais</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <a href="/spots/new">
        <button type="button" name="button" class="btn btn-primary">Submeter um spot</button>
    </a>
</div>

@endsection
