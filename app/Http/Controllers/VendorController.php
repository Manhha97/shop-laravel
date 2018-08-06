<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VendorRequest;
use App\Vendor;
use App\Product;
use App\Gallery_product;
use Cart;
use DB;

class VendorController extends Controller
{
    public function index(){
    	$vendor= Vendor::All();
    	return view('posts.vendor')->with('vendor',$vendor);
    }

    public function list($id){
        $content = Cart::content();
        $total = Cart::total();
        $cart = Cart::count();
        $vendorproducts = DB::table('products')
            ->where('products.vendor_id','=',$id)
            ->join('vendors','vendors.id','=','products.vendor_id')
            ->join('gallery_products', 'products.id', '=', 'gallery_products.product_id')
            ->select('products.*', 'gallery_products.thumbnail','vendors.name_vendor')
            ->get();
        /*dd($vendorproducts);*/
        return view('postsvendor',['vendorproducts'=>$vendorproducts,'content'=>$content,'total'=>$total,'cart'=>$cart]);
    }

    public function create(){
        return view('posts.create_vendor');
     }
    public function storevendor(VendorRequest $request){
        $data= $request->all();
        Vendor::create([
            'name_vendor' => $data['name_vendor'],
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
        return response()->json('yes');
        // $vendor = new Vendor;
        // $vendor->name_vendor=$request->name_vendor;
        // $vendor->address=$request->address;
        // $vendor->phone=$request->phone;
        // $vendor->save();
        // return redirect('admin/vendor')->with('flag','Thêm Mới Thành Công !');
     }

    public function edit($id){
        $vendor = Vendor::find($id);
        return view('posts.edit_vendor')->with('vendor',$vendor);
    }
    
    public function updatevendor(Request $request,$id){
        $vendor = Vendor::find($id);
        $vendor->name_vendor=$request->name_vendor;
        $vendor->address=$request->address;
        $vendor->phone=$request->phone;
        $vendor->save();
        return redirect('admin/vendor')->with('flag','Câp nhật thành công !');
    }
    public function destroy($id){
        Vendor::find($id)->delete();
        /*return redirect('admin/vendor')->with('flag','Xóa thành công !');*/
        /*return response()->json(['error' => false]);*/
        return response()->json([
            'success'=>'xoa thanh cong'
        ]);
    }
}
