@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h2 class="display-4">{{ $spot->name }}</h2>
        <p class="lead">{{ $spot->city }}, {{ $spot->country->name_pt }}</p>
        <p>{!! nl2br(e($spot->address)) !!}</p>
        <p>{{ $spot->email }}</p>
        <p>{{ $spot->phone_number }}</p>
        <p>{{ $spot->tripadvisor_url }}</p>
        <p>{{ $spot->latitude }}, {{ $spot->longitude }}</p>
    </div>
</div>

@endsection
