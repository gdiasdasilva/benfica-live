@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Submeter um Spot!</h2>

            <form class="" action="/spots" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-form-label" for="formSpotName">Nome do Spot *</label>
                    <input type="text" class="form-control" id="formSpotName" placeholder="Nome do Spot*" name="name" required value="{{ old('name') }}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="col-form-label" for="formSpotCity">Cidade *</label>
                        <input type="text" class="form-control" id="formSpotCity" placeholder="Cidade *" name="city" required value="{{ old('city') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label" for="formSpotCountry">País *</label>
                        <select id="formSpotCountry" class="form-control" name="country_id" required>
                            <option selected>Escolher...</option>
                            @foreach ($countries_list as $country)
                                <option value="{{ $country->id }}" @if($country->id == old('country_id')) selected @endif>
                                    {{ $country->name_pt }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="col-form-label" for="formSpotAddress">Morada</label>
                        <input type="text" class="form-control" id="formSpotAddress" placeholder="Morada" name="address" value="{{ old('address') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label" for="formSpotPhone">Telefone</label>
                        <input type="tel" class="form-control" id="formSpotPhone" placeholder="Telefone" name="phone_number" value="{{ old('phone_number') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="col-form-label" for="formSpotWebsite">Website</label>
                        <input type="text" class="form-control" id="formSpotWebsite" placeholder="Website" name="website" value="{{ old('website') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label" for="formSpotEmail">E-mail</label>
                        <input type="email" class="form-control" id="formSpotEmail" placeholder="E-mail" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="formSpotImage">Imagem</label>
                    <input type="file" class="form-control-file" id="formSpotImage" name="spot_image">
                </div>
                <button type="submit" class="btn btn-danger">Submeter</button>
            </form>
        </div>
    </div>
</div>

@endsection
