@extends('templates/ViewConcursos/create/indexCreate')

@section('visualizarConcurso')
    <h1 class="text-center">visualizar</h1><hr> 
    <div class="col-8 auto">
       <b> Nome:</b>{{$concurso_list->nome}}<br>
        <b>foto:</b> {{$concurso_list->image}}<br>
    </div>
    
@endsection