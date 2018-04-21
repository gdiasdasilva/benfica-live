@extends('layouts.app')

@section('pageTitle', $spot->name)

@section('content')

<div class="row spot-detail">
    <div class="col-md-6">
        <h2 class="display-4">{{ $spot->name }}</h2>
        <p class="lead">{{ $spot->city }}, {{ $spot->country->name_pt }}</p>

        @if ($spot->address)
            <h3>Morada</h3>
            <p>{!! nl2br(e($spot->address)) !!}</p>
        @endif

        @if ($spot->email || $spot->phone_number || $spot->website)
            <h3>Contactos</h3>
            @if ($spot->email)
                <p><label>E-mail:</label> {{ $spot->email }}</p>
            @endif

            @if ($spot->website)
                <p><label>Website:</label> <a href="{{ $spot->website }}" target="_blank" rel="noopener">{{ $spot->website }}</a></p>
            @endif

            @if ($spot->phone_number)
                <p><label>Telefone:</label> {{ $spot->phone_number }}</p>
            @endif
        @endif

        <a class="btn btn-danger" href="{{ route('countries.show', $spot->country->slug_pt) }}">Ver mais em {{ $spot->country->name_pt }}</a>
    </div>
    <div class="col-md-6 image-map-container">
        @if ((!is_null($spot->latitude) && !is_null($spot->longitude)) || $spot->thumbnail_image)
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link @if(!is_null($spot->latitude) && !is_null($spot->longitude)) active @else disabled @endif" data-toggle="tab" href="#map">Mapa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(!$spot->thumbnail_image) disabled @endif @if(!(!is_null($spot->latitude) && !is_null($spot->longitude)) && $spot->thumbnail_image) active @endif" data-toggle="tab" href="#image">Fotografias</a>
                </li>
            </ul>
            <div class="tab-content">
                @if(!is_null($spot->latitude) && !is_null($spot->longitude))
                    <div id="map" class="container tab-pane active"><br>
                        <google-map lat="{{ $spot->latitude }}" lng="{{ $spot->longitude }}"></google-map>
                    </div>
                @endif
                @if($spot->thumbnail_image)
                    <div id="image" class="container tab-pane @if(!is_null($spot->latitude) && !is_null($spot->longitude)) fade @else active @endif"><br>
                        <div class="placeholder-image" style="background-image: url({{ $spot->thumbnail_image }});"></div>
                    </div>
                @endif
            </div>
        @else
            <div class="render-placeholder-render">
                <img src="/images/renders/equipa.png" alt="Render da equipa">
            </div>
        @endif
    </div>
</div>
@endsection
