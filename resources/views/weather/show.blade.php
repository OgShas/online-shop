@extends('layouts.app')

@section('content')
    <h1>Weather for {{ $city }}</h1>
    <p>Temperature: {{ $temperature }}°C</p>
    <p>Windspeed: {{ $windspeed }} km/h</p>
@endsection
