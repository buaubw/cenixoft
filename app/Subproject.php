<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subproject extends Model
{
  protected $table = 'subproject';
  protected $primaryKey ='id';
  protected $fillable = ['name,type,date,by,profile_id'];
}
