<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Trabajos extends model{
    protected $table = 'trabajos';
    public function mostrarNombre(){
        return $this->nombreTrabajo;
    }

}


?>