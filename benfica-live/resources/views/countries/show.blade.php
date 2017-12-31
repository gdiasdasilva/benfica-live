@extends('layouts.app')

@section('pageTitle', $country->name_pt)

@section('content')

<div class="row">
    <div class="col-md-6 mx-auto">
        <h2>{{ $country->name_pt }} {{ $country->emoji }}</h2>
        <div class="list-group">
            @foreach ($country->spots as $spot)
                <a href="{{ $spot->path() }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    {{ $spot->name }}
                    <span class="badge badge-secondary">{{ $spot->city }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
