<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
  protected $table = 'sessions';

  public function apartment() {
    return $this -> belongsTo(Apartment::class);
  }
}
