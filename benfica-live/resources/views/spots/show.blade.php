@extends('layouts.app')

<div class="row">
    <div class="col-md-12">
        <h2 class="display-4">{{ $spot->name }}</h2>
        <p class="lead">{{ $spot->city }}, {{ $spot->country->name }}</p>
        <p>{{ $spot->address }}</p>
        <p>{{ $spot->latitude }}, {{ $spot->longitude }}</p>
    </div>
</div>
