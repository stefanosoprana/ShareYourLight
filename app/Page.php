<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

  protected $fillable = ['user_id', 'title', 'slug', 'description'];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function sections(){
    return $this->hasMany('App\Section');
  }
}
