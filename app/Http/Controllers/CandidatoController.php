<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Models\Candidatos;
use App\Models\Concursos;
use App\Models\User;
use App\Models\Votos;
use Illuminate\Support\Facades\DB;


class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    private $objCand;
    private $objUsers;
    private $objVoto;
 

       public function __construct(){
         $this->objCand=new Candidatos();
         $this->objCon=new Concursos();
         $this->objUsers=new User();
         $this->objVoto= new Votos();
        
    }

    public function index()
    {
      $dados=Candidatos::all()->sortBy('id');
      return view('templates.tamplates',['dados'=>$dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates/viewCandidato/create/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidatoRequest $request)
    {
        $receiv=$this->objCand->create([
            'nome'=>$request->nome,
            'foto'=>$request->foto,
            'telefone'=>$request->telefone
           ]);

           if ($receiv){
               return redirect('candidato');
           }
           
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidatos=Candidatos::find($id);
         return view('templates/viewCandidato/ViewMostrar/show',['candidatos_list'=>$candidatos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CandidatoRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

  