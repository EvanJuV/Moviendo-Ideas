<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model {
  protected $table = 'permiso';

  public function usuario() {
    return $this->hasOne('App\Usuario');
  }
}

?>
