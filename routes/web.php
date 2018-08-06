<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/', 'PostsController@index');   
Route::get('/showcart/{id}', 'PostsController@showcart1');   

Route::get('/category/{id}', 'CategoryController@list'); 
Route::get('/postvendor/{id}', 'VendorController@list'); 

Route::get('/shopping', 'CartController@giohang');   
Route::get('/search', 'CartController@search');   
Route::delete('/xoasp/{id}', 'CartController@xoasp')->name('cart.xoa');
Route::post('/dathang', 'CartController@checkout');  
Route::get('/muahang/{id}', 'CartController@muahang')->name('cart.muahang');   
Route::get('/giohang', 'CartController@giohang')->name('cart.giohang');  
Route::get('/huydathang', 'CartController@huycart')->name('cart.giohang');  
  
Route::get('/capnhat/{id}/{qty}', 'CartController@capnhat')->name('cart.capnhat');  



Route::middleware('auth')->group(function(){
	Route::get('/home', 'PostsController@index');

 });
Route::get('/test', function () {
    return view('listing');
});

Route::prefix('admin')->group(function(){
	/*Auth::routes();*/
	Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminAuth\LoginController@login');
    Route::post('logout', 'AdminAuth\LoginController@logout')->name('admin.logout');

    // Registration Routes...
    Route::get('register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'AdminAuth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'AdminAuth\ResetPasswordController@reset');

    Route::middleware('admin.auth')->group(function(){
		Route::get('admin/addpost','HomeController@create')->name('admin.create');
        Route::get('addpost','HomeController@create')->name('admin.create');
        Route::get('dashboard','HomeController@index2');
        
        Route::post('/store','HomeController@storeproduct')->name('admin.store');
        Route::get('/editpost/{id}','HomeController@editpost')->name('admin.edit');
        Route::put('/updatepost/{id}','HomeController@update')->name('admin.update');
        Route::delete('/delete/{id}','HomeController@destroy')->name('admin.delete.product');
        Route::get('/show/product/{id}','HomeController@show'); 
       
        Route::get('products/list','HomeController@getlist');

        Route::put('/updateCategory/{id}','CategoryController@updatecate')->name('category.update');
        Route::get('/createcategory','CategoryController@create')->name('category.create');
        Route::post('/storecategory','CategoryController@storecate')->name('category.storecate');
        Route::get('/category','CategoryController@index')->name('category.index');
        Route::get('/editcategory/{id}','CategoryController@edit')->name('category.edit');
        Route::delete('/deletecate/{id}','CategoryController@destroy')->name('category.delete');

        Route::delete('/deletebill/{id}','BillController@destroy')->name('bill.delete');
        Route::get('/bill','BillController@index')->name('bill.index');
        Route::get('/show/bill/{id}','BillController@show');

        Route::delete('/deletecustomer/{id}','BillController@delete');
        Route::get('/danhsach','BillController@index2');
        Route::delete('/deleteVendor/{id}','VendorController@destroy')->name('vendor.delete');
        Route::put('/updateVendor/{id}','VendorController@updatevendor')->name('vendor.update');
        Route::get('/createVendor','VendorController@create')->name('vendor.create');
        
        Route::post('/storevendor','VendorController@storevendor')->name('vendor.storevedor');
        
        Route::get('/vendor','VendorController@index')->name('vendor.index');
        Route::get('/editVendor/{id}','VendorController@edit')->name('vendor.edit');  
        

        Route::get('/showedit/{id}','DetailController@showedit'); 

        Route::post('/update/detail/{id}','DetailController@updatedetail');

        Route::delete('/deletecolor1/{id}','DetailController@destroycolor');
        Route::delete('/deletedetailcolor/{id}','DetailController@destroydetail');
        Route::get('/form/{id}','DetailController@index')->name('detail.index');
        Route::post('/detailstrore','DetailController@storedetail')->name('detail.store');
        Route::get('/detail','DetailController@showdetail');


       
        Route::post('/storecategory1','CategoryController@storecate1');
        Route::get('productdetai/list/{id}','DetailController@getlist');
       /* Route::get('productdetai/list1/{id}','DetailController@getlist2');*/
        
        Route::delete('/deleteCate/{id}','CategoryController@destroy')->name('vendor.delete');

    });

});



