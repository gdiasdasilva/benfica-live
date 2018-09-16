@extends('layouts.app')
@section('pageTitle', 'Países')
@section('content')

<section class="section countries-list">
    <div class="container">
        <div class="columns">
            <div class="column is-5 is-offset-3">
                <h1 class="title">Países</h1>
                <h2 class="subtitle">Listagem de países com spots já adicionados</h2>
                <div class="panel">
                    @foreach ($countries as $country)
                        <a class="panel-block" href="{{ route('countries.show', $country->slug_pt) }}">
                            <span class="country-flag">{{ $country->emoji }}</span>
                            <span>{{ $country->name_pt }}</span>
                            <span class="tag is-danger">{{ $country->spots_count }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
