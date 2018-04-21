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
@stop
