<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Empleados extends Model
{
    protected $table = 'empleados';
    public function proyecto()
    {
        return $this->hasOne('App\Proyectos', 'id');
    }
}