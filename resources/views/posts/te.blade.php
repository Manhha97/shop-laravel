Route::post('upload', function(Request $request){
    foreach ($request->images as $key => $image) {
       $image->store('images');
    }
    
});