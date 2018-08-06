<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_detail;
use DB;
use App\Vendor;
use App\Category;
use App\Size;
use App\Color;
use App\Gallery_product;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditProductDetailRequest;
use Illuminate\Support\Facades\Storage;

use Yajra\Datatables\Datatables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $product=Product::all();
       
        return view('dashboard')->with('product',$product);
    
    }
    public function index()
    {
        return view('home');
    
    }
    public function getList(){
        $products = DB::table('products')
        
        /*->leftJoin('product_details', 'products.id', '=', 'product_details.product_id')*/
        ->leftJoin('vendors', 'vendors.id', '=', 'products.vendor_id')
       
        ->Join('categories', 'categories.id', '=', 'products.category_id')
        ->leftJoin('gallery_products', 'products.id', '=', 'gallery_products.product_id')

        ->select('products.*','vendors.name_vendor','gallery_products.thumbnail')

            ->orderBy('products.id','desc');
            return datatables::of($products)
            ->addColumn('action',function($product){
                return '<button  class="btn btn-primary btn-adct" data-target="#detail_chitiet" data-toggle="modal"  ><i class="fas fa-plus" userId="'.$product->id.'" id="abc" ></i></button>

                 
                 
                <button userId="'.$product->id.'" class="btn btn-df btn-show-detail"><i class="fas fa-adjust"></i></button>

                <button userId="'.$product->id.'" class="btn btn-success btn-show"><i class="far fa-eye"></i></button>  

                <a  href="'.'editpost/'.$product->id.'">
                    <button  class="btn btn-warning"><i class="fas fa-edit"></i></button>
                </a>
            <button userId="'.route('admin.delete.product',$product->id).'" class="btn btn-danger btn-delele"><i class="fas fa-trash-alt"></i></button>';
        })->addColumn('thumbnail',function($product){
               return '<img style = " width:60px;height:60px" src= "' . asset(\Storage::url($product->thumbnail)) . '" />';
            })
        ->rawColumns(['action','thumbnail'])
        ->toJson();
    }
    public function create(){
        $vendors= Vendor::All();

        $sizes= Size::All();
        $colors= Color::All();
        $product=Product::all();
        $categories=Category::all();
        /*$gallery_products=Gallery_product::all();*/
        return view('posts.adm_addpost',compact('vendors','sizes','colors','product','categories'));
       
    }
    public function storeproduct(CreatePostRequest $request){

        $data= $request->all();
    
        $product= new Product;
        $product->name= $data['name'];
        $product->code= $data['code'];
        $product->original_price= $data['original_price'];
        $product->price= $data['price'];
        $product->description= $data['description'];
        $product->vendor_id= $data['vendor_id'];
        $product->category_id= $data['category'];
        $product->save();  
        
        $path = $data['thumbnail']->store('images');
        $gallery_product= new Gallery_product;
        $gallery_product->thumbnail= $path;
        $gallery_product->product_id= $product->id;
        $gallery_product->save();
        /*dd($product);*/
        return redirect('admin/dashboard')->with('flag','Thêm Mới Thành Công !');
    }
    public function editpost($id){
        $category=Category::all();
        $vendor=Vendor::all();
        $product= Product::find($id);
        return view('posts.adm_editpost',['category'=>$category,'product'=>$product,'vendor'=>$vendor]);
        }
    public function update(EditProductDetailRequest $request,$id){
       /* $data= $request->all();
        $product = Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->original_price=$request->original_price;
        $product->vendor_id=$request->vendor_id;
        $product->category_id=$request->category_id;
        $product->save();
        return redirect('admin/dashboard')->with('flag','Câp nhật thành công !');*/

         /*$product_details=Product_detail::find($id);
*/         //dd($product_details->product_id);
        $product =Product::find($id);
        $data= $request->all();
        $product->update($data);
       /* $product_details->update($data);*/
        return redirect('admin/dashboard')->with('flag','Câp nhật thành công !');
    }

   /* public function destroy($id){
        Product::find($id)->delete();
        return redirect('admin/dashboard')->with('flag','Xóa thành công !');
    }*/
    public function destroy($id){
        $product = Product::find($id)->delete();
        if(!$product){
            return response()->json(['error' => true], 500);
        }
        $gallery = Gallery_product::where('product_id',$id)->delete();
        if(!$gallery){
            return response()->json(['error' => true], 500); 
        }
        $product_detail = Product_detail::where('product_id',$id)->delete();
        return response()->json(['error' => false]);
    }
    public function show($id){

        $products = DB::table('products')
            ->join('vendors', 'vendors.id', '=', 'products.vendor_id')
            ->join('gallery_products', 'gallery_products.product_id', '=', 'products.id')
            ->leftjoin('product_details', 'product_details.product_id', '=', 'products.id')
            ->select('products.code','products.name','products.price','products.description', 'gallery_products.thumbnail','vendors.name_vendor','product_details.size_id')
            ->where('products.id',$id)
            ->get();
        return response()->json($products);
    }
}
