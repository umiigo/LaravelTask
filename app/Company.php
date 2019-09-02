<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function employee()
    {
    	$this->hasMany('App/Employee');
    }
}
