<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contacts';
  protected $primaryKey ='id';
  protected $fillable = ['title','filename','project_id','by','date'];

}
