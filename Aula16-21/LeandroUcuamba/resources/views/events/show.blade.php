@extends('layouts.main')

@section('title',$event->title)
    
@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
       </div>
       <div id="info-container" class="col-md-6">
         <h1>{{ $event->title }}</h1>
         <p class="event-city"><span class="mdi mdi-map-marker-outline"></span>{{ $event->city }}</p>
         <p class="events-participants"><span class="mdi mdi-human-queue"></span> X participantes</p>
         <p class="events-owner"><span class="mdi mdi-handshake"></span> Dono do Evento</p>
         <a href="#" class="btn btn-primary" id="event-submit">Confirmar presença</a>
         <h3>O evento conta com:</h3>
         <ul id="items-list">
            @foreach ($event->items as $item)
              <li><span class="mdi mdi-hand-pointing-right"></span>{{ $item }}</li>
            @endforeach
         </ul>
       </div>
       <div class="col-md-12" id="description-container">
         <h3>Sobre o evento:</h3>
         <p class="event-description">{{ $event->description }}</p>
       </div>
    </div>
  </div>

@endsection