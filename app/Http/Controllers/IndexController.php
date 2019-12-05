<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Community;
use App\Fixed_image;
use App\Options;
use App\Section_image;


class IndexController extends Controller
{
  public function index()
  {

    $carousel = Carousel::all();
    $community = Community::all();
    $fixed_image = Fixed_image::all();
    $options = Options::all();
    $section_image = Section_image::all();

    return view('index', compact("carousel", "community", "fixed_image", "options", "section_image"));

  }
}
