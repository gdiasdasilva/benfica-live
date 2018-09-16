@extends('layouts.app')
@section('pageTitle', $country->name_pt)
@section('content')

<section class="section country-detail">
    <div class="container">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <h1 class="title is-1">{{ $country->name_pt }} {{ $country->emoji }}</h1>
                <h2 class="subtitle">Listagem de spots</h2>
                <div class="panel">
                    @foreach ($country->spots as $spot)
                        <a class="panel-block" href="{{ route('spots.show', ['countrySlug' => $country->slug_pt, 'spotSlug' => $spot->slug]) }}">
                            <span class="panel-icon">
                                <i class="fa fa-map-pin" aria-hidden="true"></i>
                            </span>
                            <span>{{ $spot->name }}</span>
                            <span class="tag">{{ $spot->city }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column is-2 is-offset-5">
                <a class="button is-danger is-fullwidth" href="{{ route('countries.index') }}">
                    <span class="icon"><i class="fa fa-globe"></i></span>
                    <span>Ver outros países</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
