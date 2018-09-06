@extends('adminlte::page')

@section('title', $spot->name)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-{{ $spot->is_approved ? 'success' : 'danger' }}">
                <div class="box-header with-border">
                    <h1 class="box-title">{{ $spot->name }}</h1>
                    <div class="pull-right">
                        <form action="{{ route('admin.spots.destroy', $spot->id) }}"
                              onsubmit="return confirm('Tem a certeza de que quer apagar definitivamente este Spot?');"
                              method="POST" style="margin-bottom: 0;">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-md btn-danger" title="Apagar spot">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <form action="{{ route('admin.spots.update', $spot->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="col-form-label" for="formSpotName">Nome do Spot *</label>
                                    <input type="text" class="form-control" id="formSpotName"
                                           placeholder="Nome do Spot *" name="name" required
                                           value="{{ old('name') ? old('name') : $spot->name }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotCity">Cidade *</label>
                                    <input type="text" class="form-control"
                                           id="formSpotCity" placeholder="Cidade *"
                                           name="city" required
                                           value="{{ old('city') ? old('city') : $spot->city }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotCountry">País *</label>
                                    <select id="formSpotCountry" class="form-control" name="country" required>
                                        @php($selectCountry = (old('country') ? old('country') : $spot->country_id))
                                        @foreach ($countriesList as $country)
                                            <option value="{{ $country->id }}" {{ ($country->id == $selectCountry) ? 'selected' : '' }}>
                                                {{ $country->name_pt }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="latitudeLongitude">Latitude e Longitude</label>
                                    <input type="text" class="form-control" id="latitudeLongitude"
                                           placeholder="latitude,longitude" name="latitude-longitude"
                                           value="{{ old('latitude-longitude') ? old('latitude-longitude') : ($spot->latitude . ',' . $spot->longitude) }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotAddress">Morada</label>
                                    <input type="text" class="form-control" id="formSpotAddress"
                                           placeholder="Morada" required name="address"
                                           value="{{ old('address') ? old('address') : $spot->address }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotPhone">Telefone</label>
                                    <input type="tel" class="form-control" id="formSpotPhone"
                                           placeholder="Telefone" name="phone-number"
                                           value="{{ old('phone-number') ? old('phone-number') : $spot->phone_number }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotWebsite">Website</label>
                                    <input type="text" class="form-control" id="formSpotWebsite" placeholder="Website"
                                           name="website"
                                           value="{{ old('website') ? old('website') : $spot->website }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="col-form-label" for="formSpotEmail">E-mail</label>
                                    <input type="email" class="form-control" id="formSpotEmail"
                                           placeholder="E-mail" name="email"
                                           value="{{ old('email') ? old('email') : $spot->email }}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="col-form-label" for="formSpotImage">Imagem</label>
                                    <input type="file" id="formSpotImage" name="image">
                                    @if ($spot->image)
                                        <a href="{{ $spot->image }}" target="_blank">
                                            <div class="spot-image">
                                                <img src="{{ $spot->image }}" alt="Spot">
                                            </div>
                                        </a>
                                    @else
                                        <p style="margin-top: 10px;">Não foi adicionada imagem para este spot.</p>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="approved" {{ $spot->is_approved ? 'checked' : '' }}>
                                            Spot <strong>publicado</strong>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="featured" {{ $spot->is_featured ? 'checked' : '' }}>
                                            Spot <strong>destacado</strong>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-md btn-success">Submeter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

<style>
    .spot-image {
        margin-top: 20px;
    }

    .spot-image img {
        max-width: 150px;
    }
</style>
