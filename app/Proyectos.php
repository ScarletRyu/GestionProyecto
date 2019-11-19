<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Proyectos extends Model
{
   protected $table = 'proyectos';
   public function empleado()
    {
        return $this->belongsTo('App\Empleados', 'id');
    }
}