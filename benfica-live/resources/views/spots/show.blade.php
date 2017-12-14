@extends('layouts.app')

<div class="container">
    <h2>{{ $spot->name }}</h2>
    <p>{{ $spot->address }}</p>
    <p>{{ $spot->country->name }}</p>
    <p>{{ $spot->latitude }}, {{ $spot->longitude }}</p>
</div>
