<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $table = 'projects';
  protected $primaryKey ='id';
  protected $fillable = ['name','customer_id','date','by','type'];
  // function customers() {
  //       return $this->belongsTo('Customer', 'customer_id');
  //   }
  public function customers()
  {
    return $this->belongsTo('App\Customer', 'customer_id');
  }
}
