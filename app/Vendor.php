<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendors'; // bảng products trong database
    protected $fillable = [
    		'id', 
    		'name_vendor', 
    		'address', 
    		'phone'
    	];
}
