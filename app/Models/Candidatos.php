<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatos extends Model
{
    protected $table='candidatos';
    protected $fillable=['nome','foto','telefone'];

    use HasFactory;
}
