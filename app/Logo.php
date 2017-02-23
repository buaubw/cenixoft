<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Logo extends Model
{
  protected $table = 'logos';
  protected $primaryKey ='id';
  protected $fillable = ['customername','customerlogo','tools','description','picture','date','by'];

}
