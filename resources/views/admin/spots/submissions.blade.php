@extends('adminlte::page')

@section('title', 'Últimas submissões')

@section('content_header')
    <h1>Últimas submissões</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Spots Por aprovar</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>País</th>
                                <th>Cidade</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notApprovedSpots as $notApprovedSpot)
                                <tr>
                                    <td>{{ $notApprovedSpot->name }}</td>
                                    <td>{{ $notApprovedSpot->country->name_pt }}</td>
                                    <td>{{ $notApprovedSpot->city }}</td>
                                    <td><a class="btn btn-xs btn-primary" href="{{ route('admin.spots.edit', $notApprovedSpot->id) }}">Gerir</a></td>
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
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Últimos Spots Aprovados</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>País</th>
                                <th>Cidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($approvedSpots as $approvedSpots)
                                <tr>
                                    <td>{{ $approvedSpots->name }}</td>
                                    <td>{{ $approvedSpots->country->name_pt }}</td>
                                    <td>{{ $approvedSpots->city }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>País</th>
                                <th>Cidade</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
