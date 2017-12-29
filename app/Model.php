<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
  //protected $fillable = ['title', 'body'];  // use fillable with what you allow
  protected $guarded = [];  // opposit than fillable  (allow every thing excipt what inside the array)
}
