@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id !== null)
        <h1 style="text-align: center;">Exibindo produto id: {{ $id }}</h1>
    @endif

@endsection