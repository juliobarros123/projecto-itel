@extends('templates/viewUsers/createUsers/indexUsers')

@section('createUsers')

<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title text-center">cadastrar usuario</h1>
      <form class="form-sample" id="formCad" name="formCad" method="post" action="{{url('users')}}">
        @csrf
        <p class="card-description">informacoes pessoa</p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">nome</label>
              <div class="col-sm-9">
                <input type="text" nome="nome" id="nome" class="form-control" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">ultimo nome</label>
              <div class="col-sm-9">
                <input type="text" nome="ultimo_nome" id="ultimo_nome" class="form-control" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
         
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="password" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">imagem</label>
              <div class="col-sm-9">
                <input type="text" name="imagem" id="imagem" class="form-control" />
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label id="perfil" nome="perfil" class="col-sm-3 col-form-label">Perfil</label>
              <div class="col-sm-9">
                <select class="form-control">
                  <option>Usuario</option>
                  <option>Admin</option>
                 
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">telefone</label>
              <div class="col-sm-9">
                <input type="number" nome="telefone" id="telefone" class="form-control" />
              
              </div>
            </div>
          </div>

        
        
        </div>


        <input type="submit" value="Candastrar" class="text-center btn btn-primary">
      </form>
      
    </div>
  
  </div>
</div>

@endsection