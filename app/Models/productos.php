<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $primaryKey ='idproducto';
    protected $fillable = ['idtipo','idmarca','descripcion','cantidad','contneto','unidadxempaque','disponibilidad','valor','imagen'];
}