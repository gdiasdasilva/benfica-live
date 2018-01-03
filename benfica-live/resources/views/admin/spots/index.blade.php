@extends('adminlte::page')

@section('title', 'Lista de Spots')

@section('content_header')
    <h1>Lista de Spots</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Default Box Example</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>País</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spots as $spot)
                                <tr>
                                    <td>{{ $spot->name }}</td>
                                    <td>{{ $spot->country->name_pt }}</td>
                                    <td>{{ $spot->city }}</td>
                                    <td width="15px;" class="{{ $spot->is_approved ? 'bg-green' : 'bg-red' }}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>País</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
