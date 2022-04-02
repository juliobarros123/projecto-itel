@extends('templates/ViewConcursos/create/indexCreate')
@section('createConcursos')
    <h1 class="text-center">cadastrar concursos</h1><hr> 
    
        <div class="col-4 m-auto">
             <div class="card">
                 <div class="card-body">
                    <form id="formCad" name="formCad" method="post"  action="{{url('concursos')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="nome" id="nome1" placeholder="Nome" class="form-control" required> <br>
                    <label for="">imagem do concurso</label>
                    <input type="file" name="image" id="image"  class="form-control-file " required><br><br>
                    <input type="date" name="data_inicio" id="data_inicio" class="form-control " required><br>
                    <input type="date" name="data_termino" id="data_termino"  class="form-control " required><br>
                    <input type="submit" value="Candastrar" class="text-center btn btn-primary ">
                    </form>
               </div>
           </div>
        </div>
@endsection
