@extends('templates/viewVotos/createVotos/indexVotos')

@section('templatesVoto')
    <h1 class="text-center">Crud</h1><hr> 
    
    <div class="col-9 m-auto">
        
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

            </tbody>
        </table>
    </div>
    <div class="text-center mt-3 mb-4">
        <a href="{{url('votos/create')}}">
            <button class="btn btn-success">votos</button>
        </a>
    </div>
@endsection
