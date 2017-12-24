@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Submeter um Spot!</h2>

            <form class="" action="/spots" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group">
                        <label class="col-form-label" for="formSpotName">Nome do Spot</label>
                        <input type="text" class="form-control" id="formSpotName" placeholder="Nome do Spot" name="name" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="formSpotAddress">Morada</label>
                        <input type="text" class="form-control" id="formSpotAddress" placeholder="Morada" name="address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotEmail">E-mail</label>
                            <input type="email" class="form-control" id="formSpotEmail" placeholder="E-mail" name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotPhone">Telefone</label>
                            <input type="tel" class="form-control" id="formSpotPhone" placeholder="Telefone" name="phone_number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="formSpotTripAdvisorURL">URL do TripAdvisor</label>
                        <input type="text" class="form-control" id="formSpotTripAdvisorURL" placeholder="URL do TripAdvisor" name="tripadvisor_url">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotCity">Cidade</label>
                            <input type="text" class="form-control" id="formSpotCity" placeholder="Cidade" name="city">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label" for="formSpotCountry">País</label>
                            <select id="formSpotCountry" class="form-control" name="country_id">
                                <option selected>Escolher...</option>
                                @foreach ($countries_list as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Submeter</button>
            </form>
        </div>
    </div>
</div>

@endsection
