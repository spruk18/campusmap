<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
    //
    use SoftDeletes;
    protected $table = 'employees';
    protected $fillable = [
        'login_id', 'information_id','employee_type','department_id'
    ];
    protected $dates = ['deleted_at'];
}
