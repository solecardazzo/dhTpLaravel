<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $table="genres";
  public $timestamps=false;
  public $guarded=[];
}
