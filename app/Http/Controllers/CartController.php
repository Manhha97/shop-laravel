<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShopCartRequest;
use App\Product;
use App\Product_detail;
use DB;
use Cart;
use App\Vendor;
use App\Customer;
use App\Bill;
use App\Category;
use App\Gallery_product;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function muahang($id){
    $product_buy = DB::table('product_details') ->where('product_details.id', '=', $id)
    	->leftjoin('products','product_details.product_id','=','products.id')
        ->join('gallery_products','gallery_products.product_id','=','product_details.product_id')
    	->first();
    	Cart::add(array('id'=>$id,'name'=>$product_buy->name,'price'=>$product_buy->price,'qty'=>1,'options'=>array('kichthuoc'=>$product_buy->size_id,'mau'=>$product_buy->color_id,'image'=>$product_buy->thumbnail,'product_id'=>$product_buy->product_id,'chitiet_id'=>$id)));
    	$content = Cart::content();

        return response()->json(Cart::content());
      /*return redirect()->back();*/
        
    }
    public function search(Request $request){
      $content = Cart::content();
      $total = Cart::total();
      $cart = Cart::count();
      $reach_product = DB::table('products')
        ->join('vendors', 'vendors.id', '=', 'products.vendor_id')
        ->join('gallery_products', 'products.id', '=', 'gallery_products.product_id')
        ->select('products.*', 'gallery_products.thumbnail')
        ->where('name','like','%'.$request->search.'%')
        ->orWhere('price',$request->search)
        ->get();
      return view('posts.seach',compact('content','total','cart','reach_product'));
    }
    public function giohang(){
    	$content = Cart::content();
    	$total = Cart::total();
      $cart = Cart::count();
     	return view('posts.shopping',compact('content','total','cart'));
    }
    public function xoasp($id){
    	Cart::remove($id);//la rowID 
      return response()->json([
            'success'=>'xoa thanh cong'
        ]);
      /*return response()->json(Cart::content());*/
    	/*return redirect('/');*/
    }
    public function capnhat($id,$qty){
      Cart::update($id,$qty);
      $cart = Cart::count();
    	return response()->json(Cart::content());
    }
    public function huycart(){
      Cart::destroy();
      return redirect()->back()->with('flag','Bạn đã hủy giỏ hàng');
    }
    
    
    public function checkout(ShopCartRequest $request){
      $content = Cart::content();
      /*dd($content);*/
      $cart = Cart::count();
      if($cart <= 0){
        return redirect()->back()->with('flag','Bạn chưa có sản phẩm hoặc số lượng không hợp lệ!'); 
      }
      else{
        $customer = new Customer;
        $customer->name = $request->customer;
        $customer->phone = $request->phone;
        $customer->addr = $request->addr;
        $customer->content = $request->content;
        $customer->save();
      }
      foreach ($content as $value) {
        $bill = new Bill();
        $bill->product_id = $value->options->product_id;
        $bill->ten_sp = $value->name;
        $bill->kich_thuoc = $value->options->kichthuoc;
        $bill->mau = $value->options->mau;
        $bill->soluong = $value->qty;
        $bill->gia = $value->price;
        $bill->total = ($value->qty*$value->price);
        $bill->customer_id = $customer->id;
        $bill->hinhthuc = $request->hinhthuc;
        $bill->save();
        $dslist = Product_detail::where('product_details.id', '=',$value->options->chitiet_id)
        ->first();
        $dslist->quantity = $dslist->quantity - $value->qty;
        $dslist->save();
        
       }
      
       Cart::destroy();
       return redirect()->back()->with('thongbao','Đặt hàng thành công. Chúng tôi sẽ liên hệ cho bạn để nhận hàng. Cảm ơn bạn đã đến với chúng tôi !'); 
    }
}
