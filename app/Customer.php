<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $table = 'customers';
     protected $primaryKey ='id';
     protected $fillable = ['firstname','lastname','companyname','address','tel','fax','email','password','taxno','date'];
}
