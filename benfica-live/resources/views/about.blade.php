@extends('layouts.app')

@section('pageTitle', 'Sobre nós')

@section('scripts')
    <script src="/js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="/js/jquery-jvectormap-world-mill.js"></script>
    <script>
        $(function(){
            var countriesData = {
                @foreach ($countriesWithSpots as $country)
                    "{{ strtoupper($country->code) }}": {{ $country->spots_count }},
                @endforeach
            };

            var countriesLinks = {
                @foreach ($countriesWithSpots as $country)
                    "{{ strtoupper($country->code) }}": "{{ $country->path() }}",
                @endforeach
            };

            $('#world-map').vectorMap({
                map: 'world_mill',
                backgroundColor: "white",
                zoomOnScroll: false,
                zoomButtons : false,
                series: {
                    regions: [{
                        values: countriesData,
                        scale: ['#ef5350', '#c62828'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                regionStyle: {
                    initial: {
                        fill: '#bfbfbf',
                        "fill-opacity": 1,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 1
                    },
                },
                onRegionClick:function(event, code) {
                    if(typeof countriesLinks[code] !== 'undefined') {
                        var path = countriesLinks[code];
                        window.location.href = path;
                    }
                },
                onRegionTipShow: function(e, el, code){
                    if(typeof countriesData[code] !== 'undefined') {

                        var spotWord = 'spots';
                        if (countriesData[code] == 1) {
                            spotWord = 'spot'
                        }

                        el.html(el.html() + ' - ' + countriesData[code] + ' ' + spotWord);
                    }
                }
            });
        });
    </script>
@endsection

@section('styles')
    <link href="/css/jquery-jvectormap-2.0.3.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <p class="lead">O <strong>benfica.live</strong> foi criado com o intuito de promover a partilha de espaços utilizados por benfiquistas, em Portugal e no estrangeiro, para assistir aos jogos do Sport Lisboa e Benfica.</p>
            <p>A plataforma é mantida por adeptos e para adeptos. No mapa abaixo, podes ver todos os países para os quais já foram adicionados spots:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="world-map" style="width: 100%; height: 600px"></div>
        </div>
    </div>
@endsection
