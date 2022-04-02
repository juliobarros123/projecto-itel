<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concursos;

class ConcursosControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $objCon;

    public function __construct(){
       
        $this->objCon=new Concursos();
   
       
   }
    public function index()
    {
        $dadoConcursos=Concursos::all()->sortBy('id');
        return view('templates/ViewConcursos/create/create',['dadoConcursos'=>$dadoConcursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates/ViewConcursos/create/formConcursos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recover=$this->objCon->create([


            'nome'=>$request->nome,
            'image'=>$request->image,
            'data_inicio'=>$request->data_inicio,
            'data_termino'=>$request->data_termino,
            'created_at'=>$request->created_at,
            'updated_at'=>$request->updated_at
   
           
           ]);

         
           


    
      //image uplod
      if($request->hasFile('image') && $request->file('image')->isValid()){

       $requestImage=$request->image;

       $extension=$requestImage->extension();

       $imageName=md5($requestImage->getClienteOriginalName().strtotime("now")).".". $extension;
       $requestImage->image->move(public_path('img/concursos'),$imageName);

       $recover->image=$imageName;
      }
      //end uplod
      $recover->save();
    
      if ($recover){
        return redirect('concursos');
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
        $mostrar=Concursos::find($id);
         return view('templates/ViewConcursos/ViewShow/showConcurso',['concurso_list'=>$mostrar]);
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
    public function update(Request $request, $id)
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
