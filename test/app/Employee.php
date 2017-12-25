<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function employee_info(){
        //return $this->belongsTo('App\EmployeeInfo');
        return $this->hasMany('App\EmployeeInfo');
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }
}
