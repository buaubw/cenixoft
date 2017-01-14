<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
  protected $table = 'feedbacks';
  protected $primaryKey ='id';
  protected $fillable = ['profile_id,fullname,suggestion,convinience,ontime,price,complacency,date'];
}
