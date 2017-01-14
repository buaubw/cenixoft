<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table = 'profiles';
  protected $primaryKey ='id';
  protected $fillable = ['name','customer_id','date','by'];
}
