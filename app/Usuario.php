<?php

namespace App;

use Request;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
		protected $table = 'usuarios';

    public function referencias() {
    	return $this->hasMany('App\Referencia');
    }

    public function proyecto() {
    	return $this->hasOne('App\Proyecto');
    }

    public function permiso() {
    	return $this->belongsToOne('App\Permiso');
    }

		public function asociados() {
			return $this->hasManyThrough('App\Asociados', 'App\Proyecto');
		}
}

?>
