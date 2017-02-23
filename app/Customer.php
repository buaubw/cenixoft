<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\User;
class Customer extends Model
{
     protected $table = 'customers';
     protected $primaryKey ='id';
     protected $fillable = ['firstname','lastname','companyname','address','tel','fax','taxno','date','user_id'];
    //  function projects() {
    //     return $this->hasMany('Project', 'id');
    // }
    public function projects()
    {
      return $this->hasMany('App\Project');
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
