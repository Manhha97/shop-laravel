<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers'; // bảng products trong database
    protected $fillable = [
    		'id', 
    		'name', 
    		'phone', 
    		'addr', 
    		'content'
    	];
}
