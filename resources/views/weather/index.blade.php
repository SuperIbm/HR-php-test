@extends('layouts.main')

@section("title", "Weather")

@section('content')
    <div class="row no-gutters">
        <div class="col-1 pr-2">
            <img src="{{ $weather["icon"] }}" />
        </div>
        <div class="col-4" style="font-size: 270%; font-weight: bold;">
            @if($weather["temp"] > 0)
                +{{ $weather["temp"] }}
            @elseif($weather["temp"] == 0)
                {{ $weather["temp"] }}
            @else
                -{{ $weather["temp"] }}
            @endif
        </div>
    </div>
@endsection