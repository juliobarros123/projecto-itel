@extends('templates/ViewConcursos/create/indexCreate')

@section('conteudoConcurso')
    <h1 class="text-center">cadastrar Concursos</h1><hr> 

    <div class="col-9 m-auto">
        
        <table class="table text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">INICIO</th>
                    <th scope="col">TERMINO</th>
                    <th scope="col">CREATE_AT</th>
                    <th scope="col">UPDATE_AT</th>
                    
                    <th scope="col">ACCOES</th>
                </tr>
            
            </thead>
            <tbody>
                @foreach($dadoConcursos as $k)
                <tr>
                   <th scope="row">{{$k->id}}</th>
                   <td>{{$k->nome}}</td>
                   <td>{{$k->image}}</td>
                   <td>{{$k->data_inicio}}</td>
                   <td>{{$k->data_termino}}</td>
                   <td>{{$k->created_at}}</td>
                   <td>{{$k->updated_at}}</td>
                  


                   <td>
                            <a href="{{url("concursos/$k->id")}}">
                                <button class="btn btn-dark">visualizar</button>
                            </a>
                            <a href="http://">
                                <button class="btn btn-primary">editar</button>
                            </a>
                        
                            <a href="http://">
                                <button class="btn btn-danger">delete</button>
                            </a>
                   </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center mt-3 mb-4 ">
        <a href="{{url('concursos/create')}}">
            <button class="btn btn-success ">cadastrar Concursos</button>
        </a>
    </div>
@endsection
    
