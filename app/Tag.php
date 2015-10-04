<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $table = 'tags';

  public function usuarios() {
    return this->belongsToMany('App\Usuario');
  }
}
