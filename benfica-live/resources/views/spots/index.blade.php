@extends('layouts.app')

@section('content')

<h2>List de Spots</h2>
<hr>
    @foreach ($spotsByCountry as $country => $spots)
        <div class="country-entry">
            <h3>{{ $country }}</h3>
            <div id="accordion" role="tablist">
            @foreach ($spots as $spot)
                <div class="card">
                    <div class="card-header" role="tab" id="heading{{ $spot->id }}">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapse{{ $spot->id }}" aria-expanded="true" aria-controls="collapse{{ $spot->id }}">
                             {{ $spot->name }}
                            </a>
                        </h5>
                    </div>
                    <div id="collapse{{ $spot->id }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $spot->id }}" data-parent="#accordion">
                        <div class="card-body">
                            <p>{{ $spot->address }}</p>
                            <p>{{ $spot->city }}, {{ $spot->country->name_pt }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    @endforeach
@endsection
