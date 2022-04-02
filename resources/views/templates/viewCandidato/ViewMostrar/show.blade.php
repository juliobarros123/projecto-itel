@extends('templates.index')

@section('visualizar')
    <h1 class="text-center">visualizar</h1><hr> 
    <div class="col-8 auto">
       <b> Nome:</b>{{$candidatos_list->nome}}<br>
        <b>foto:</b> {{$candidatos_list->foto}}<br>
        <b>telefone:</b> {{$candidatos_list->telefone}}<br>
    </div>
    
@endsection