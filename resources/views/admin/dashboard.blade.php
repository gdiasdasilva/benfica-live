@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-map-pin"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Spots</span>
                    <span class="info-box-number">{{ $totalSpots }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-times"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Spots pendentes</span>
                    <span class="info-box-number">{{ $totalSpotsPendingApproval }}</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-map"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Países</span>
                    <span class="info-box-number">{{ $totalCountries }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-featured">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-star"></i> Spots Destacados</h3>
                </div>
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        @foreach ($featuredSpots as $spot)
                        <li>
                            <div class="spots-image" style="background-image: url('{{ $spot->image }}')"></div>
                            <a class="users-list-name" href="{{ route('admin.spots.edit', $spot->id) }}">
                                {{ $spot->name }}
                            </a>
                            <span class="users-list-date">
                                Criado {{ Carbon\Carbon::instance($spot->created_at)->diffForHumans() }}
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="box-footer text-center">
                    <a href="{{ route('admin.spots.index') }}">
                        <button class="text-uppercase btn btn-primary">Ver todos os Spots</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .spots-image {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            margin-bottom: 5px;
            background-size: cover;
            display: inline-block;
        }
        .fa-star {
            color: goldenrod;
        }
        .box.box-featured {
            border-top: 3px solid goldenrod;
        }
    </style>
@endsection