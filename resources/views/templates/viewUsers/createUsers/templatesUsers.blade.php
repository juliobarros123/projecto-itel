@extends('templates/viewUsers/createUsers/indexUsers')

@section('templatesUsers')
     <h1>Users</h1><hr>

     <div class="col-12 m-auto">

          <table class="table text-center ">
               <thead class="bg-dark text-light">
                    <tr>
                         <th scope="col">ID</th>
                         <th scope="col">NOME</th>
                         <th scope="col">ULTIMO_NOME</th>
                         <th scope="col">IMAGEM</th>
                         <th scope="col">TELEFONE</th>
                         <th scope="col">PASSWORD</th>
                         <th scope="col">PERFIL</th>
                         <th scope="col">CREATE_AT</th>
                         <th scope="col">UPDATE_AT</th>
                         <th scope="col">ACCOES</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach($dadosUsers as $value)
                    <tr>
                         <td scope="row">{{$value->id}}</td>
                         <td>{{$value->nome}}</td>
                         <td>{{$value->ultimo_nome}}</td>
                         <td>{{$value->imagem}}</td>
                         <td>{{$value->telefone}}</td>
                         <td>{{$value->password}}</td>
                         <td>{{$value->perfil}}</td>
                         <td>{{$value->created_at}}</td>
                         <td>{{$value->updated_at}}</td>
                         <td>
                              <a href="{{url("users/$value->id")}}">
                                   <button class="btn btn-dark">view</button>
                              </a>
                              <a href="">
                                   <button class="btn btn-primary">edit</button>
                              </a>
                              <a href="">
                                   <button class="btn btn-danger">delete</button>
                              </a>
                         </td>
                    </tr>
                    @endforeach
                   
               </tbody>


          </table>
      
          <div class="texte-center mt-3 mb-4 m-auto">
               <a href="{{url('users/create')}}">
                    <button class="btn btn-success">Users register</button>
               </a>
          </div>
     </div>
   
@endsection