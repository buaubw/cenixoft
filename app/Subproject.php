<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subproject extends Model
{
  protected $table = 'subprojects';
  protected $primaryKey ='id';
  protected $fillable = ['name','type','date','by','profile_id'];
}
