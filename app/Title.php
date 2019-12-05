<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
  public function Section()
  {
    return $this->belongsTo('App\Section');
  }
}
