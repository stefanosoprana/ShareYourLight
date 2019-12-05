<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    public function Section()
    {
      return $this->belongsTo('App\Section');
    }
}