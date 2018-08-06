<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Category;
use App\Product;
use App\Gallery_product;
use Cart;
use DB;


class CategoryController extends Controller
{
   	public function index(){
    	$category= Category::All();
    	return view('posts.category')->with('category',$category);
    }
    public function list($id){
        $content = Cart::content();
        $total = Cart::total();
        $cart = Cart::count();
        $postproducts = DB::table('products')
            ->where('products.category_id','=',$id)
            ->join('gallery_products', 'products.id', '=', 'gallery_products.product_id')
            ->select('products.*', 'gallery_products.thumbnail')
            ->get();

        return view('listing',['postproducts'=>$postproducts,'content'=>$content,'total'=>$total,'cart'=>$cart]);
    }
    public function create(){
        return view('posts.create_category');
     }
     public function storecate(CreateCategoryRequest $request){
        $data= $request->all();
        $category = new Category;
        $category->name=$data['name'];
        $category->short_content=$data['short_content'];
        $category->save();
        return redirect('admin/category')->with('flag','Thêm Mới Thành Công !');
     }
     public function storecate1(Request $request){
        $data= $request->all();
        $validator  = $request->validate([
            'name'      => 'required',
            'short_content'     => 'required'
            
        ]);
        $category = new Category;
        $category->name=$data['name'];
        $category->short_content=$data['short_content'];
        $category->save();
        return redirect('admin/addpost');
     }

    public function edit($id){
        $category = Category::find($id);
        return view('posts.edit_category')->with('category',$category);
    }
    
    public function updatecate(CreateCategoryRequest $request,$id){
        $category = Category::find($id);
        $category->name=$request->name;
        $category->short_content=$request->short_content;
        $category->save();
        return redirect('admin/category')->with('flag','Câp nhật thành công !');
    }
   /* public function destroy($id){
        Category::find($id)->delete();
        return redirect('admin/category')->with('flag','Xóa thành công !');
    }*/
    public function destroy($id){
        Category::find($id)->delete();
        return response()->json([
            'success'=>'xoa thanh cong'
        ]);
    }
     

    
}
