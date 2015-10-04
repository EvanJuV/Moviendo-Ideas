<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model {

		protected $table = 'referencias';
    public function usuario() {
      return $this->belongsTo('App/Usuario');
    }
}

?>
