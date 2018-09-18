@extends('layouts.app')
@section('pageTitle', $spot->name . ' - ' . $spot->country->name_pt)

@section('content')

<section class="section spot-detail">
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <h1 class="title is-1">{{ $spot->name }}</h1>
                <h2 class="subtitle">
                    {{ $spot->city }}, {{ $spot->country->name_pt }} {{ $spot->country->emoji }}
                </h2>
                <div class="spot-details content">
                    <div class="address">
                        <span class="icon">
                            <i class="fa fa-map-pin"></i>
                        </span>
                        <span>{{ $spot->address }}</span>
                    </div>
                    @if ($spot->phone_number)
                        <div class="phone-number">
                            <span class="icon">
                                <i class="fa fa-phone"></i>
                            </span>
                            <span>{{ $spot->phone_number }}</span>
                        </div>
                    @endif
                    @if ($spot->email)
                        <div class="email">
                            <span class="icon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <span><a href="mailto:{{ $spot->email }}">{{ $spot->email }}</a></span>
                        </div>
                    @endif
                    @if ($spot->website)
                        <div class="website">
                            <span class="icon">
                                <i class="fa fa-link"></i>
                            </span>
                            <span>
                                <a href="{{ $spot->website }}" target="_blank" rel="noopener">
                                    Visitar website
                                </a>
                            </span>
                        </div>
                    @endif

                    @if ($spot->image)
                        <button class="button is-success open-image-modal" v-on:click="toggleSpotModal">
                            <span class="icon">
                                <i class="fa fa-photo"></i>
                            </span>
                            <span>Ver imagens</span>
                        </button>
                    @endif
                </div>
            </div>
            <div class="column is-6">
                <google-map lat="{{ $spot->latitude }}" lng="{{ $spot->longitude }}"></google-map>
            </div>
        </div>
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <a class="button is-danger is-fullwidth" href="{{ route('countries.show', $spot->country->slug_pt) }}">
                    <span class="icon"><i class="fa fa-globe"></i></span>
                    <span>Ver mais em {{ $spot->country->name_pt }}</span>
                </a>
            </div>
        </div>

        @if ($spot->image)
            <div class="modal" v-bind:class="{'is-active' : spotDetailModalOpen}">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image is-3by2">
                        <img src="{{ $spot->image }}" alt="{{ $spot->name }}" title="{{ $spot->name }}">
                    </p>
                </div>
                <button class="modal-close is-large" aria-label="close" v-on:click="toggleSpotModal"></button>
            </div>
        @endif

    </div>
</section>

@endsection
