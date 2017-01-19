<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customercontact extends Model
{
  protected $table = 'customercontacts';
  protected $primaryKey ='id';
  protected $fillable = ['title','filename','project_id','by','date'];

}
