<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
  protected $table = 'requirements';
  protected $primaryKey ='id';
  protected $fillable = ['title','filename','project_id','by','date'];

  public function project()
  {
    return $this->belongsTo('App\Project');
  }
}
