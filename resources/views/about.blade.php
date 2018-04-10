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
                        scale: ['#ef9a9a', '#b71c1c'],
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
        <div class="col-md-10 mx-auto">
            <h1>Sobre o projecto</h1>
            <p class="lead">O <strong>benfica.live</strong> surge da necessidade de centralizar a informação sobre locais (cafés, restaurantes) onde sejam transmitidos os jogos do Sport Lisboa e Benfica, em Portugal e pelo Mundo.</p>

            <p class="lead">Seja em viagem de trabalho, de lazer ou durante um programa Erasmus, muitos benfiquistas têm dificuldade em encontrar locais que transmitam regularmente os jogos.</p>

            <p class="lead">A plataforma foi criada por adeptos e é para os adeptos. Qualquer pessoa tem a liberdade de submeter um local e contribuir para a comunidade.</p>

            <p class="lead">No mapa abaixo estão representados todos os países para os quais já foram submetidos locais (spots) que transmitem os jogos.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="world-map" style="width: 100%; height: 600px"></div>
        </div>
    </div>
@endsection
