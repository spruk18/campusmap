<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //
    protected $table = 'informations';
    protected $fillable = [
        'fname', 'lname', 'mname','address','login_id','photo'
    ];
}
