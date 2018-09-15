@extends('layouts.app')

@section('pageTitle', 'Spots')

@section('content')

<div class="row">
    <div class="col-md-6 mx-auto">
        <h2>Spots | Por país</h2>
        <div class="list-group">
            @foreach ($countries as $country)
                <a href="{{ route('countries.show', $country->slug_pt) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <span>{{ $country->name_pt }} {{ $country->emoji }}</span>
                    <span class="badge badge-danger">{{ $country->spots_count }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
