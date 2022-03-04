@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

@if($busca !== null)
    <h1 style="text-align: center;">O usuario está buscando por: {{ $busca }}</h1>
@endif


@endsection