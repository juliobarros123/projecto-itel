@extends('templates.index')

@section('conteudo')
    <h1 class="text-center">Crud</h1><hr> 
    
    <div class="col-9 m-auto">

        @if(isset($errors) && count($errors)>0)

            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}
                @endforeach
            </div>
        @endif

        
        <table class="table text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">CREATE_AT</th>
                    <th scope="col">UPDATE_AT</th>
                    <th scope="col">ACCOES</th>
                </tr>
            </thead>
          <tbody>
                    @foreach($dados as $key)
                         <tr>
                            <th scope="row">{{$key->id}}</th>
                            <td>{{$key->nome}}</td>
                            <td>{{$key->foto}}</td>
                            <td>{{$key->telefone}}</td>
                            <td>{{$key->created_at}}</td>
                            <td>{{$key->updated_at}}</td>
                            <td>
                                <a href="{{url("candidato/$key->id")}}">
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
    <div class="text-center mt-3 mb-4">
        <a href="{{url('candidato/create')}}">
            <button class="btn btn-success">cadastrar candidato</button>
        </a>
    </div>
@endsection