@extends('adminlte::page')

@section('title', 'Lista de Spots')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Lista de Spots</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover" id="spots-table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Cidade</th>
                                <th>País</th>
                                <th>Aprovado</th>
                                <th>Destacado</th>
                                <th>Criado em</th>
                                <th>Acções</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(function() {
            $('#spots-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.spots.datatables.data') !!}',
                order: [5, "desc"],
                columns: [
                    { data: 'spot_name', name: 'name' },
                    { data: 'city', name: 'city' },
                    { data: 'country.name_pt', name: 'country.name_pt' },
                    { data: 'is_approved', name: 'is_approved', className: 'text-center' },
                    { data: 'is_featured', name: 'is_featured', className: 'text-center' },
                    { data: 'created_at', name: 'created_at', visible: false },
                    { data: 'actions', name: 'actions', sortable: false },
                ]
            });
        });
    </script>
@endsection

@section('css')
    <style>
        .fa-check {
            color: green;
        }
        .fa-close {
            color: red;
        }
        .fa-star {
            color: goldenrod;
        }
    </style>
@endsection