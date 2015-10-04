<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model {
  protected $table = 'permisos';

  public function usuario() {
    return $this->belongsTo('App\Usuario');
  }
}

?>
