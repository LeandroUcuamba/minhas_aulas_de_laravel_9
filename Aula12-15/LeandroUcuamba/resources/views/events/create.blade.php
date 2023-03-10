@extends('layouts.main')

@section('title','produtos')
    
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
   <h1>Crie um evento</h1>
   <form action="/events" method="POST">
    @csrf  <!-- esta diretiva permite que os dados possam ser enviados. Senão não funciona -->
     <div class="form-group">
       <label for="title">Evento:</label>
       <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" >
     </div>
     <div class="form-group">
      <label for="city">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" >
    </div>
    <div class="form-group">
      <label for="title">O evento é privado:</label>
      <select name="private" id="private" class="form-control">
         <option value="0">Não</option>
         <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai aconteçer no evento"></textarea>
    </div>
    <br/>
    <input type="submit" class="btn btn-primary" value="Criar Evento" />
   </form>
</div>



@endsection