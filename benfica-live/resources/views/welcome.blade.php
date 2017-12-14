@extends('layouts.app')

<div class="row">
    <div class="col-md-12">
        <h1 class="display-3">benfica.live</h1>
        <hr>
        <div class="">
            <h2>Most recent spots</h2>
            <ul>
                @foreach ($recent_spots as $spot)
                    <a href="{{ $spot->path() }}"><li>{{ $spot->name }} ({{ $spot->city }}, {{ $spot->country->name }})</li></a>
                @endforeach
            </ul>
        </div>
        <hr>
        <div class="">
            <h2>Submit a spot!</h2>

            <form class="" action="/spots" method="post">
                <div class="form-group">
                    <div class="form-group">
                        <label class="col-form-label" for="formSpotHomeSpotName">Name</label>
                        <input type="text" class="form-control" id="formSpotHomeSpotName"placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="formSpotHomeSpotAddress">Address</label>
                        <input type="text" class="form-control" id="formSpotHomeSpotAddress"placeholder="Address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotHomeSpotCity">City</label>
                            <input type="text" class="form-control" id="formSpotHomeSpotCity"placeholder="City">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotHomeSpotCountry">Country</label>
                            <select id="formSpotHomeSpotCountry" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
