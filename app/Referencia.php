<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model {
    public function usuario() {
      return $this->hasOne('App/Usuario');
    }
}

?>
