@extends('templates.index')
@section('create')
    <h1 class="text-center">cadastrar</h1><hr> 
    
    <div class="col-8 m-auto">
        <form id="formCad" name="formCad" method="post"  action="{{url('candidato')}}">
          @csrf
          <input type="text" name="nome" id="nome1" placeholder="Nome" class="form-control" required> <br>
          <input type="text" name="foto" id="foto" placeholder="Foto" class="form-control " required><br>
          <input type="number" name="telefone" id="telefone" placeholder="Telefone" class="form-control " required><br>
         <input type="submit" value="Candastrar" class="text-center btn btn-primary">
        </form>
    </div>
@endsection
