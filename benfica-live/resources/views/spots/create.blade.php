@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Submit a spot!</h2>

            <form class="" action="/spots" method="post">
                <div class="form-group">
                    <div class="form-group">
                        <label class="col-form-label" for="formSpotName">Name</label>
                        <input type="text" class="form-control" id="formSpotName" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="formSpotAddress">Address</label>
                        <input type="text" class="form-control" id="formSpotAddress" placeholder="Address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotEmail">E-mail</label>
                            <input type="email" class="form-control" id="formSpotEmail" placeholder="E-mail">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotPhone">Phone</label>
                            <input type="tel" class="form-control" id="formSpotPhone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="formSpotTripAdvisorURL">TripAdvisor URL</label>
                        <input type="text" class="form-control" id="formSpotTripAdvisorURL" placeholder="TripAdvisor URL">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotCity">City</label>
                            <input type="text" class="form-control" id="formSpotCity" placeholder="City">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotCountry">Country</label>
                            <select id="formSpotCountry" class="form-control">
                                <option selected>Choose...</option>
                                @foreach ($countries_list as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
