<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_detail;
use DB;
use Cart;
use App\Vendor;
use App\Category;
use App\Gallery_product;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index()
    {
        $content = Cart::content();
        $total = Cart::total();
        $cart = Cart::count();
        $postproducts = DB::table('products')
           ->join('vendors', 'vendors.id', '=', 'products.vendor_id')
         /*  ->join('product_details', 'product_details.product_id', '=', 'products.id')*/
          ->join('gallery_products', 'products.id', '=', 'gallery_products.product_id')
          ->select('products.*', 'gallery_products.thumbnail')
          /*->orderBy('products.id','desc')*/
          ->paginate(8);

        return view('home',['postproducts'=>$postproducts,'content'=>$content,'total'=>$total,'cart'=>$cart]);
    }
    public function showcart($id){
      $content = Cart::content();
      $total = Cart::total();
      $cart = Cart::count();
    	return view('posts.showcart',compact('content','total','cart'));
    }
    public function showcart1($id){
        $content = Cart::content();
        $total = Cart::total();
        $cart = Cart::count();
        $product = DB::table('products')
          ->where('products.id', '=', $id)
          ->join('product_details','product_details.product_id', '=', 'products.id')
          ->select('products.*', 'product_details.quantity', 'product_details.size_id', 'product_details.color_id','product_details.id' )->get();
         /* dd($product);*/
        $showct=Product_detail::where('product_details.product_id', '=', $id)
        ->get();


        $showdetail = DB::table('products')
        ->join('gallery_products','gallery_products.product_id','=','products.id')
        ->where('products.id','=',$id)
        ->select('products.*','gallery_products.thumbnail')->first();
        return view('posts.showcart',['product'=>$product,'showdetail'=>$showdetail,'content'=>$content,'total'=>$total,'cart'=>$cart]);
    }
}
