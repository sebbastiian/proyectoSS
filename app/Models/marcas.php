<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
    use HasFactory;
    protected $fillable = ['idmarca','nombre'];
    protected $primaryKey ='idmarca';
}

