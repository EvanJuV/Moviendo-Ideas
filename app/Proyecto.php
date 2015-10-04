<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';

    public function asociados() {
      return $this->belongsToMany('App\Asociado');
    }

    public function asesor() {
      return $this->belongsTo('App\Asesor');
    }
}

?>