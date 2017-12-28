@extends('layouts.app')

@section('content')

<div class="row spot-detail">
    <div class="col-md-6">
        <h2 class="display-4">{{ $spot->name }}</h2>
        <p class="lead">{{ $spot->city }}, {{ $spot->country->name_pt }}</p>

        <h3>Morada</h3>
        <p>{!! nl2br(e($spot->address)) !!}</p>

        <h3>Contactos</h3>
        <p><label>E-mail:</label> {{ $spot->email }}</p>
        <p><label>Telefone:</label> {{ $spot->phone_number }}</p>
        <p><label>TripAdvisor:</label> {{ $spot->tripadvisor_url }}</p>
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
