@extends('layouts.app')

<div class="container">
    <h2>Spots list</h2>
    <ul>
        @foreach ($spots as $spot)
            <a href="{{ $spot->path() }}"><li>{{ $spot->name }}</li></a>
        @endforeach
    </ul>
</div>
