@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6">
        <h2 class="display-4">{{ $spot->name }}</h2>
        <p class="lead">{{ $spot->city }}, {{ $spot->country->name_pt }}</p>
        <p>{!! nl2br(e($spot->address)) !!}</p>
        <p>{{ $spot->email }}</p>
        <p>{{ $spot->phone_number }}</p>
        <p>{{ $spot->tripadvisor_url }}</p>
        <p>{{ $spot->latitude }}, {{ $spot->longitude }}</p>
    </div>
    <div class="col-md-6">
        <google-map lat="{{ $spot->latitude }}" lng="{{ $spot->longitude }}"></google-map>
    </div>
</div>
@endsection
