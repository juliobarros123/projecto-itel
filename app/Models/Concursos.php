<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concursos extends Model
{
    
        protected $table='concursos';
        protected $fillable=[
            'nome',
            'image',
            'data_inicio',
            'data_termino',
            'created_at',
            'updated_at',
            
        ];

    use HasFactory;
}
