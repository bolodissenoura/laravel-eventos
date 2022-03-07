@extends('layouts.main')

@section('title', 'Daniel Lima')

@section('content')

<div id="search-container" class="col-md-12 ">
    <h1 class="d-flex justify-content-center">busque um evento</h1>
    <br>
    <form action="" class="d-flex justify-content-center">
        <input type="text" id="search" class="form-control " placeholder="Procure um Evento...">
        <button class="btn btn-color">
            <ion-icon name="search"></ion-icon>
        </button>
    </form>
    <br><br><br><br><br><br>
</div>
<div id="events-container" class="col-md-12">
    <h1>próximos eventos</h1>
    <h1>próximos eventos</h1>
    <h1>próximos eventos</h1>
    <h1>próximos eventos</h1>
    <h1>próximos eventos</h1>
    <h1>próximos eventos</h1>
    <h1>próximos eventos</h1>
    <div class="row " id="cards-container">
        @foreach($events as $event)
        <div class="col-md-3 card">
            <img src="/img/tokin.jpg" alt="Imagem do {{ $event->title }}">
            <div class="card-body">
                <p class="card-date">10/10/2020</p>
                <h5>{{$event->title}}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="#" class="btn btn-color ">saber mais 😀</a>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection