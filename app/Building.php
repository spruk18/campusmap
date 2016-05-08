<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Building extends Model
{
    //
    use SoftDeletes;
    protected $table = 'buildings';
    protected $fillable = [
        'building_name','x_loc','y_loc'
    ];
    protected $dates = ['deleted_at'];
}
