<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery_Product extends Model
{
    protected $table = 'gallery_products'; // bảng products trong database
    protected $fillable = [
    	'thumbnail','product_id'
    ];
    public function products(){
    	return $this->belongsTo('App\Product');
    }
}