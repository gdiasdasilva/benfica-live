@extends('layouts.app')

@section('pageTitle', 'Contactos')

@section('content')

<section class="section contact-form">
    <div class="container">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <h1 class="title is-1">Contacta-nos</h1>
                <h2 class="subtitle">Se tens alguma dúvida ou sugestão, preenche o formulário abaixo para entrar em contacto connosco.</h2>

                <form action="{{ route('contacts.store') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="field">
                        <label class="label">Nome *</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Ex: Rui Costa"
                                   name="name" required value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">E-mail *</label>
                        <p class="control has-icons-left">
                            <input class="input" type="email" placeholder="Ex: hello@example.com"
                                   name="email" value="{{ old('email') }}" required>
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </p>
                    </div>

                    <div class="field">
                        <label class="label">Mensagem *</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Deixa a tua mensagem..." rows="8"
                                      name="message" required>{{ old('message') }}
                            </textarea>
                        </div>
                    </div>

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
