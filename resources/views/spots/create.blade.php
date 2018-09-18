@extends('layouts.app')
@section('pageTitle', 'Novo Spot')
@section('content')

<section class="section spot-submission-form">
    <div class="container">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <h1 class="title is-1">Novo Spot</h1>
                <h2 class="subtitle">Sugere um Spot para ser adicionado à plataforma</h2>

                <form action="{{ route('spots.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Nome *</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Ex: Restaurante Glorioso"
                                   name="name" required value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">País *</label>
                        <p class="control has-icons-left">
                            <span class="select is-fullwidth">
                                <select name="country" required>
                                    <option selected disabled>Escolher...</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" {{ ($country->id == old('country')) ? 'selected' : '' }}>
                                            {{ $country->name_pt }}
                                        </option>
                                    @endforeach
                                </select>
                            </span>
                            <span class="icon is-small is-left">
                                <i class="fa fa-globe"></i>
                            </span>
                        </p>
                    </div>

                    <div class="field">
                        <label class="label">Cidade *</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Ex: Barcelona" maxlength="35"
                                   name="city" required value="{{ old('city') }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Morada *</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Ex: Av. Eusébio da Silva Ferreira, 1500-313 Lisboa"
                                   name="address" required value="{{ old('address') }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Telefone</label>
                        <p class="control has-icons-left">
                            <input class="input" type="text" placeholder="Ex: 912 345 678"
                                   name="phone-number" value="{{ old('phone-number') }}">
                            <span class="icon is-small is-left">
                                <i class="fa fa-phone"></i>
                            </span>
                        </p>
                    </div>

                    <div class="field">
                        <label class="label">Website</label>
                        <p class="control has-icons-left">
                            <input class="input" type="text" placeholder="Ex: https://benfica.live"
                                   name="website" value="{{ old('website') }}">
                            <span class="icon is-small is-left">
                                <i class="fa fa-link"></i>
                            </span>
                        </p>
                    </div>

                    <div class="field">
                        <label class="label">E-mail</label>
                        <p class="control has-icons-left">
                            <input class="input" type="email" placeholder="Ex: hello@example.com"
                                   name="email" value="{{ old('email') }}">
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </p>
                    </div>

                    <div class="file">
                        <label class="file-label">
                            <input class="file-input" type="file" name="image" accept="image/*">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fa fa-upload"></i>
                                </span>
                                <span class="file-label">Carregar uma imagem</span>
                            </span>
                        </label>
                    </div>

                    <hr>

                    <div class="field">
                        <p class="control">
                            <button class="button is-success" type="submit">Submeter</button>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection
