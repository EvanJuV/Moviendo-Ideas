<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociado extends Model {
  protected $table = 'asociados';

  public function proyecto() {
    return this->hasOne('App\Proyecto');
  }

  public function usuario() {
    return this->hasOne('App\Usuario');
  }
}

?>
