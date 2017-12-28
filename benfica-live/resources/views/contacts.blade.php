@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>Contacta-nos</h2>
            <p class="lead">Se tens alguma dúvida ou sugestão, usa o formulário abaixo para entrar em contactos com os administradores do website. Responderemos brevemente.</p>

            <form action="/contactos" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-form-label" for="formContactName">Nome *</label>
                    <input type="text" class="form-control" id="formContactName" placeholder="Nome" name="name" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="formContactEmail">E-mail *</label>
                    <input type="email" class="form-control" id="formContactEmail" placeholder="E-mail" name="email" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="formContactMessage">Mensagem *</label>
                    <textarea id="formContactMessage" class="form-control" name="message" rows="8" cols="80" placeholder="Mensagem" required></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Submeter</button>
            </form>
        </div>
    </div>
</div>

@endsection
