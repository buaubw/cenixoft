<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
  protected $table = 'invoices';
  protected $primaryKey ='id';
  protected $fillable = ['title','filename','project_id','by','date'];

}
