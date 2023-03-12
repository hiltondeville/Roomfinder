<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PioneerRoom extends Model
{
  protected $fillable = [
    'sid',
    'description',
    'picsnum',
    'keynum',
    'img1', 'img2', 'img3', 'img4', 'img5', 'img6','img7','img8','img9','img10','img11','img12',
    'planpage',
    'maplocation',
    'route',
    'routeend',


      ];
}
