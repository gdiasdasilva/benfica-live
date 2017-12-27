@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 mx-auto">
        <h2>Países</h2>
        <div class="list-group">
            @foreach ($countries as $country)
                <a href="{{ $country->path() }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    {{ $country->name_pt }}
                    <span class="badge badge-danger">{{ $country->spots->count() }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
