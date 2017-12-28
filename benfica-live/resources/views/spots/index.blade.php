@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-8 mx-auto">
        <h2>List de Spots</h2>
        <hr>
            @foreach ($spotsByCountry as $country => $spots)
                <div class="country-entry">
                    <h3>{{ $country }}</h3>
                    <div class="list-group">
                        @foreach ($spots as $spot)
                            <a href="{{ $spot->path() }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                {{ $spot->name }}
                                <span class="badge badge-secondary">{{ $spot->city }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endsection
    </div>
</div>
