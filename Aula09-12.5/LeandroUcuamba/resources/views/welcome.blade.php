@extends('layouts.main')

@section('title','Unia Eventos')
    
@section('content')


       <h1>Algum titulo</h1>
       <img src="/img/unia.jpg" alt="Banner">

       <p> O meu nome é {{$nome}} e tenho {{$idade2}} anos e sou um {{$profissao}}</p>
       <br/>
       @for($i=0; $i < count($arr); $i++)
          {{$arr[$i]}}
       @endfor
       <br/>
       @php
         $sobrenome = "Ucuamba";
         echo $sobrenome;  
       @endphp
       <br/>
       <br/>


@endsection