<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  protected $table = 'educations';
  protected $primaryKey ='id';
  protected $fillable = ['url,type,date,by,tel,fax,email,password,taxno,date'];
}
