<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    public function asociados() {
      return $this->hasMany('App\Asociado');
    }

    public function asesor() {
      return $this->belongsTo('App\Asesor');
    }
}

?>
