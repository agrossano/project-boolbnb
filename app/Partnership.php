<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    protected $table = 'partnerships';

    public function apartment() {
      return $this -> belongsTo(Apartment::class);
    }

    public function package() {
      return $this -> belongsTo(Package::class);
    }
}
