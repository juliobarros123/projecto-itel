@extends('templates/viewUsers/createUsers/indexUsers')

@section('showUsers')
  <h1>details</h1><hr>
<b> First name:</b>{{$viewUsers->nome}}<br>
<b>Last name:</b>{{$viewUsers->ultimo_nome}}<br>
<b>image:</b>{{$viewUsers->imagem}}<br>
<b>perfil:</b>{{$viewUsers->perfil}}<br>

@endsection