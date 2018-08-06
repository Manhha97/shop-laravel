<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; // bảng products trong database
    protected $fillable = [
    		'code', 
    		'name', 
    		'original_price', 
    		'price',
    		'description',
            'tag_id',
    		'vendor',
    		'category_id'
    	]; // một mảng tên các cột trong bảng posts ở database
    	// không cần thêm các cột như id, created_at, updated_at, deleted_at vào
    	// vì nó là những cột mặc định

    // Relationship tới model Category
    // quan hệ một nhiều
    public function category(){
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function gallery_product(){
        return $this->hasMany('App\Gallery_Product');
    }

    public function vendor(){
        return $this->belongsTo('App\Vendor', 'vendor_id');
    }
    public function product_details(){
        return $this->belongsToMany('App\Product_detail');
    }
    
}
