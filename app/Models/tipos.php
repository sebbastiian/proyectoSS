<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
    use HasFactory;
    protected $primaryKey ='idtipo';
    protected $fillable = ['nombre'];
}

/*<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    use HasFactory;
    protected $primaryKey ='idalumno';
    protected $fillable = ['idpersona','carrera','facultad'];
}
 */