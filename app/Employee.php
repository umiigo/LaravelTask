<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function company()
    {
    	$this->belongsTo('App/Company');
    }
}
