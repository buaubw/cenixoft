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
    return $this->belongsTo('App\Customer');
  }

  public function quatations()
  {
    return $this->hasMany('App\Quatation');
  }
  public function requirements()
  {
    return $this->hasMany('App\Requirement');
  }
  public function contacts()
  {
    return $this->hasMany('App\Contact');
  }
  public function customercontacts()
  {
    return $this->hasMany('App\CustomerContact');
  }
  public function invoices()
  {
    return $this->hasMany('App\Invoice');
  }
  public function feedbacks()
  {
    return $this->hasMany('App\Feedback');
  }
}
