@extends('layouts.main')

@section('title','Unia Eventos')
    
@section('content')

  <div id="search-container" class="col-md-12">
       <h1>Busque por um evento</h1>
       <form action="">
          <input type="text" id="search" class="form-control" placeholder="procure aqui">
       </form>
  </div>
  <div id="events-container" class="col-md-12">
       <h2>Próximos Eventos</h2>
       <p class="subtitle">Veja os eventos dos proximos dias</p>
       <div id="card-container" class="row">
           @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/flutter.png" alt="{{$event->title}}">
                <div class="card-body">
                     <p class="card-date">11/10/2022</p>
                     <h5 class="card-title">{{$event->title}}</h5>
                     <p class="card-participants">X participantes</p>
                     <a href="#" class="btn btn-primary">Saber mais</a>
                </div>  
            </div>
           @endforeach
       </div>
  </div>


@endsection