<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

  protected $fillable = [
      'page_id', 'title', 'slug',
  ];

  public function page(){
    return $this->belongsTo('App\Page');
  }

  public function descriptions(){
    return $this->hasMany('App\Description');
  }

  public function images(){
    return $this->hasMany('App\Image');
  }

  public function titles(){
    return $this->hasMany('App\Title');
  }

  public function subtitles(){
    return $this->hasMany('App\Subtitle');
  }

}
