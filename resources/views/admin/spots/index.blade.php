@extends('adminlte::page')

@section('title', 'Lista de Spots')

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Spots</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>País</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($spots as $spot)
                                <tr>
                                    <td>{{ $spot->name }}</td>
                                    <td>{{ $spot->country->name_pt }} {{ $spot->country->emoji }}</td>
                                    <td>{{ $spot->city }}</td>
                                    <td class="">
                                        <span class="badge {{ $spot->is_approved ? 'bg-green' : 'bg-red' }}">{{ $spot->is_approved ? 'Aprovado' : 'Por aprovar' }}</span>
                                        @if (!($spot->latitude && $spot->longitude))
                                            <span class="badge bg-yellow">Lat/Long</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.spots.edit', $spot->id) }}">
                                            Gerir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $spots->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
