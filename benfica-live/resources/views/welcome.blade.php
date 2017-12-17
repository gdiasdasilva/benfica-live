@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="">
            <h2>Most recent spots</h2>
            <ul>
                @foreach ($recent_spots as $spot)
                    <a href="{{ $spot->path() }}"><li>{{ $spot->name }} ({{ $spot->city }}, {{ $spot->country->name }})</li></a>
                @endforeach
            </ul>
        </div>
        <hr>
        <button type="button" name="button" class="btn btn-danger">Submit a spot</button>
    </div>
</div>
@endsection
