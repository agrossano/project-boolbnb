<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
  protected $table = 'packages';

  public function partnerships() {
    return $this -> hasMany(Partnership::class);
  }

}
