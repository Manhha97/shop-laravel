<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors'; // bảng products trong database
    protected $fillable = [
    	'id','color_name','color'
    ];
}
