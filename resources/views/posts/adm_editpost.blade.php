@extends('layouts.admin')

@section('content')
<div class="content">
     <div id="page-wrapper">
        <center><h2 style="color: red">Sửa Sản phẩm</h2></center>
        
            <form action="{{asset('')}}admin/updatepost/{{$product->id}}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row">
                @csrf
                {{ method_field('put')}}
                <div class="col-md-7">            
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Code(*)</label>
                                <input type="text" class="form-control" id="" placeholder="Code" name="code" value="{{$product->code}}" disabled>
                            </div>
                            @if($errors->has('code'))
                                <p style="color: red">{{$errors->first('code')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name(*)</label>
                                <input type="text" class="form-control" id="" placeholder="Name" name="name" value="{{$product->name}}">
                            </div>
                            @if($errors->has('name'))
                                <p style="color: red">{{$errors->first('name')}}</p>
                            @endif
                        </div>                  
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Original_price(*)</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập giá nhập" name="original_price" value="{{$product->original_price}}">
                            </div>
                            @if($errors->has('original_price'))
                                <p style="color: red">{{$errors->first('original_price')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Price(*)</label>
                                <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Price">
                            </div>
                            @if($errors->has('price'))
                                <p style="color: red">{{$errors->first('price')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Description(*)</label>
                                <input type="text" class="form-control"  placeholder="Nội dung ngắn" name="description" value="{{$product->description}}">
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Description</label>
                                <textarea  class="form-control" name="description" value="{{$product->description}}"></textarea>
                            </div> -->
                            @if($errors->has('description'))
                                <p style="color: red">{{$errors->first('description')}}</p>
                            @endif
                        </div>
                    </div>
                              
                </div>
                <div class="col-md-5 clearfix">
                    
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Category</label>
                                <select class="select_tag form-control" name="category" >
                                    @foreach($category as $category)

                                        <option value="{{$category->id}}"
                                            @if($category->id == $product->category_id) 
                                            selected
                                            @endif
                                    >{!!$category['name']!!}</option>
                                    @endforeach                       
                                </select>
                            </div>
                            @if($errors->has('category'))
                                <p style="color: red">{{$errors->first('category')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group">
                                <label for="">Vendor</label>
                                <select class="select_tag form-control" name="vendor_id"  value="{{$product->name_vendor}}">
                                    @foreach($vendor as $vendor)
                                        <option value="{{$vendor->id}}"
                                            @if($vendor->id == $product->vendor_id) 
                                            selected
                                        @endif>
                                    {!!$vendor['name_vendor']!!}</option>
                                    @endforeach                       
                                </select>    
                            </div>
                            @if($errors->has('vendor_id'))
                                <p style="color: red">{{$errors->first('vendor_id')}}</p>
                            @endif
                        
                    </div> 
                             
                </div>
                
                <button class="btn btn-success " style="width: 15%; margin-left: 5%" type="submit"> UPDATE</button> 
                <br><br>
            </form> 
    </div>
</div>
@endsection