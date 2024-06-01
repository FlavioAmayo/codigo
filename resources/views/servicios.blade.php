@extends('layout')

@section('content')
<h1>Servicios</h1>
<ul>
    @foreach ($servicios as $servicio)
        <li>{{ $servicio }}</li>
    @endforeach
</ul>
@endsection
