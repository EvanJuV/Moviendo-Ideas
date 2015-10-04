<?php

namespace App;

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract {

		use Authenticatable, Authorizable, CanResetPassword;

		protected $table = 'usuarios';

    public function referencias() {
    	return $this->hasMany('App\Referencia');
    }

    public function proyecto() {
    	return $this->hasOne('App\Proyecto');
    }

    public function permiso() {
    	return $this->hasOne('App\Permiso');
    }

	public function asociados() {
		return $this->hasManyThrough('App\Asociados', 'App\Proyecto');
	}

		protected $hidden = ['password', 'remember_token'];
}

?>
