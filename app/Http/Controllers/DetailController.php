<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\DetailRequest;
use App\Product;
use App\Product_detail;
use DB;
use App\Vendor;
use App\Category;
use App\Size;
use App\Color;
use App\Gallery_product;
use Yajra\Datatables\Datatables;

class DetailController extends Controller
{
    public function getlist($id)
    {
        $prodetail_id=$id;
        $productdetails = DB::table('product_details')->where('product_details.product_id', '=', $prodetail_id)
        ->join('products', function ($join) {
            $join->on('product_details.product_id', '=', 'products.id');           
        })
        ->select('product_details.id','products.name','product_details.quantity','product_details.size_id','product_details.color_id');
    
         

        return Datatables::of($productdetails)
            ->addColumn('action', function($productdetail){
                return '
                        <button productId="'. $productdetail->id .'" class="btn btn-sm btn-danger btn-deletedetail" id="productdetail_delete" ><i class="fa fa-trash"></i></button>';
            })
            ->addColumn('color_id', function($product){
              /*  return '<img class="img-fluid" src="'. $user->avatar .'">';*/
                return '<div style="width: 50px;border-radius: 30%;height: 50px;background:'.$product->color_id.'"></div>';
             })
        ->rawColumns(['action','color_id'])
        ->make(true);
    }
    /*public function getlist2($id){
        $product_detl=Product_detail::find($id);
    }*/
    public function getlist2($id){
        $products=Product_detail::all()->where('product_id','=',$id);
            dd($products);
        return response()->json($products);
        /*return $detproduct;*/
    }



    public function index($id)
    {
        $product_id = $id;
    	$products = DB::table('products')
            ->join('product_details', 'products.id', '=', 'product_details.product_id')
            ->join('sizes', 'sizes.id', '=', 'product_details.size_id')
            ->join('vendors', 'vendors.id', '=', 'products.vendor_id')
            ->join('colors', 'colors.id', '=', 'product_details.color_id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('gallery_products', 'products.id', '=', 'gallery_products.product_id')
            ->select('products.*','product_details.id as product_detail_id', 'sizes.size','categories.name','product_details.size_id','vendors.name_vendor','product_details.color_id','colors.color','product_details.quantity')
            ->get();
            $keyed = $products->keyBy('product_detail_id');
            $pro_detail= Product_detail::All();
            $sizes= Size::All();
            $colors= Color::All();
        return view('posts.detail',compact('sizes','colors','pro_detail', 'product_id'));
    
    }
    public function showdetail(){
        $detail=Product_detail::all();
        return view('detail',['details'=>$detail]);
    }
   

    public function storedetail(DetailRequest $request){
        $request->merge([ 
            'size_id' => implode(',', (array) $request->get('size_id')) 
        ]); 
        $data = $request->all();
       /* $request->validate([
            'product_id' => 'required|numeric',
            'size_id' => 'required',
            'color_id' => 'required',
            'quantity' => 'required|numeric',
        ]);*/
        Product_detail::create($data);
        /*return redirect('admin/dashboard')->with('flag','Thêm màu thành công!');*/
        return response()->json(['success'=>'yes']);

    }
    public function destroycolor($id){
        Product_detail::find($id)->delete();
        return redirect('admin/detail')->with('flag','Xóa thành công !');
    }
    public function destroydetail($id){
        Product_detail::find($id)->delete();
        return response()->json([
            'success'=>'xoa thanh cong'
        ]);
    }
    public function showedit($id){
         $products = DB::table('product_details')
            ->select('product_details.id','product_details.size_id','product_details.product_id','product_details.color_id','product_details.quantity')->where('product_details.id',$id)
             ->get();
        return response()->json($products);
    }
    public function editdetail($id){
        $prodetail=Product_detail::find($id);
        return view('posts.edit_detail',['prodetail'=>$prodetail]);
    }
    
    public function updatedetail(Request $request,$id){
        $data= $request->all();
        /*$request->validate([
            'product_id' => 'required|numeric',
            'size_id' => 'required',
            'color_id' => 'required',
            'quantity' => 'required|numeric',
        ]);*/
        $prod_detail = Product_detail::find($id);
        $prod_detail->update($data);
        /*$prod_detail->quantity=$request->quantity;
        $prod_detail->size_id=$request->size_id;
        $prod_detail->color_id=$request->color_id;
        $prod_detail->save();*/
        return response()->json(['success'=>'yes']);
       /* return redirect('admin/detail')->with('flag','Câp nhật thành công !');*/
    }
}
