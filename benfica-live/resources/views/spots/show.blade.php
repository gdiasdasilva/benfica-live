@extends('layouts.app')

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

        <a class="btn btn-danger" href="{{ $spot->country->path() }}">Ver mais em {{ $spot->country->name_pt }}</a>
    </div>
    <div class="col-md-6 image-map-container">
        @if ($spot->latitude && $spot->longitude)
            <google-map lat="{{ $spot->latitude }}" lng="{{ $spot->longitude }}"></google-map>
        @elseif ($spot->image)
            <div class="placeholder-image" style="background-image: url({{ asset('storage/'.$spot->thumbnail_image) }});"></div>
        @else
            <div class="render-placeholder-render">
                <img src="/images/renders/equipa.png" alt="Render da equipa">
            </div>
        @endif
    </div>
</div>
@endsection
