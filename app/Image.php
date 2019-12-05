<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public function Section()
  {
    return $this->belongsTo('App\Section');
  }

}
