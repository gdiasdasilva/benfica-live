@extends('layouts.app')

<div class="container">
    <h2>{{ $spot->name }}</h2>
    <p>{{ $spot->address }}</p>
    <p>Country: {{ $spot->country_id }}</p>
    <p>{{ $spot->latitude }}, {{ $spot->longitude }}</p>
</div>
