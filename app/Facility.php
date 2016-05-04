<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Facility extends Model
{
    //
    use SoftDeletes;
    protected $table = 'facilities';
    protected $fillable = [
        'name','floor','building','photo','floor_plan'
    ];
    protected $dates = ['deleted_at'];
}
