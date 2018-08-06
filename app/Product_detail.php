<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_detail extends Model
{
    protected $table = 'product_details'; // bảng products trong database
    protected $fillable = [
    		'product_id', 
    		'size_id', 
    		'color_id', 
    		'quantity'
    	];
}