@extends('adminlte::page')

@section('title', $spot->name)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border border-color-success">
                    <h3 class="box-title">{{ $spot->name }}</h3>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <form action="{{ route('admin.spots.update', $spot->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="col-form-label" for="formSpotName">Nome do Spot</label>
                                    <input type="text" class="form-control" id="formSpotName" placeholder="Nome do Spot *" name="name" required value="{{ $spot->name }}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotCity">Cidade</label>
                                    <input type="text" class="form-control" id="formSpotCity" placeholder="Cidade *" name="city" required value="{{ $spot->city }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotCountry">País</label>
                                    <select id="formSpotCountry" class="form-control" name="country_id" required>
                                        @foreach ($countries_list as $country)
                                            <option value="{{ $country->id }}" {{ ($country->id == $spot->country_id) ? 'selected' : '' }}>
                                                {{ $country->name_pt }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="latitudeLongitude">Latitude e Longitude</label>
                                    <input type="text" class="form-control" id="latitudeLongitude" placeholder="latitude,longitude" name="latitudeLongitude">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotAddress">Morada</label>
                                    <input type="text" class="form-control" id="formSpotAddress" placeholder="Morada" name="address" value="{{ $spot->address }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotPhone">Telefone</label>
                                    <input type="tel" class="form-control" id="formSpotPhone" placeholder="Telefone" name="phone_number" value="{{ $spot->phone_number }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotWebsite">Website</label>
                                    <input type="text" class="form-control" id="formSpotWebsite" placeholder="Website" name="website" value="{{ $spot->website }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotEmail">E-mail</label>
                                    <input type="email" class="form-control" id="formSpotEmail" placeholder="E-mail" name="email" value="{{ $spot->email }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success">Gravar e aprovar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
