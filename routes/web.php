<?php

use App\Http\Controllers\CandidatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\ConcursosControllers;
use App\Http\Controllers\VotosControllers;
use App\Http\Controllers\UsersController;


//Route::get('/',[Crud::class,'index']);

//Route::resource('/candidato',Candidato::class);
//Route::resource('/candidato',[Candidato::class,'store']);
Route::resource('/candidato',CandidatoController::class);
Route::resource('/concursos',ConcursosControllers::class);
Route::resource('/votos',VotosControllers::class);

Route::resource('/users',UsersController::class);









