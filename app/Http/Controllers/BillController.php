<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Bill;
use App\Customer;
use App\Gallery_product;
use DB;
use Illuminate\Support\Facades\Storage;
class BillController extends Controller
{
   	public function index(Request $request){
    	/*$bill= Bill::All();*/
        $bill = DB::table('bills')
        ->where('ten_sp','like','%'.$request->key.'%')
        ->orWhere('total',$request->key)
        ->orWhere('soluong',$request->key)
        ->orWhere('customer_id',$request->key)
        ->orWhere('created_at','like','%'.$request->key.'%')
        ->get();
       	return view('posts.bill')->with('bill',$bill);
    }
    public function index2(Request $request){
        /*$bill= Bill::All();*/
        $list = DB::table('customers')
        ->where('name','like','%'.$request->keycustom.'%')
        ->orWhere('phone',$request->keycustom)
        ->orWhere('addr','like','%'.$request->keycustom.'%')
        ->get();
        return view('posts.customer')->with('list',$list);
    }
    public function destroy($id){
        Bill::find($id)->delete();
        return response()->json([
            'success'=>'xoa thanh cong'
        ]);
    }
    public function delete($id){
        Customer::find($id)->delete();
        return response()->json([
            'success'=>'xoa thanh cong'
        ]);
    }
    public function show($id){
        $bill = DB::table('bills')
            ->where('bills.id',$id)
            ->join('customers', 'customers.id', '=', 'bills.customer_id')
            ->join('gallery_products', 'gallery_products.product_id', '=', 'bills.product_id')
            ->select('bills.*','customers.name','customers.phone','customers.addr','customers.created_at','gallery_products.thumbnail')
            ->get();
            /*dd($bill);*/
        return response()->json($bill);
    }
    
     

    
}
