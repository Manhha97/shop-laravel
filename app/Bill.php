<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills'; // bảng products trong database
    protected $fillable = [
    		'id', 
    		'customer_id', 
    		'ten_sp', 
    		'kich_thuoc', 
    		'mau', 
    		'soluong', 
            'total', 
    		'hinhthuc', 
    		'product_id'
    	];
}
