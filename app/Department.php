<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Department extends Model
{
    //
    use SoftDeletes;
    protected $table = 'departments';
    protected $fillable = [
        'name','dept_type'
    ];
    protected $dates = ['deleted_at'];
}
