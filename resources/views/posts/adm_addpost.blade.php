@extends('layouts.admin')

@section('content')
<div class="content">
     <div id="page-wrapper">
        <center><h2 style="color: red">Thêm mới sản phẩm</h2></center>
        
            <form action="{{route('admin.store')}}" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row">
                @csrf
                <div class="col-md-7">            
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Code(*)</label>
                                <input type="text" class="form-control" id="code" placeholder="1000" name="code" value="{{old('code')}}">
                            </div>
                            @if($errors->has('code'))
                                <p style="color: red">{{$errors->first('code')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name(*)</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{old('name')}}">
                            </div>
                            @if($errors->has('name'))
                                <p style="color: red">{{$errors->first('name')}}</p>
                            @endif
                        </div>                  
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Original_price(*)</label>
                                <input type="text" class="form-control" id="original_price" placeholder="100,000" name="original_price" value="{{old('original_price')}}">
                            </div>
                            @if($errors->has('original_price'))
                                <p style="color: red">{{$errors->first('original_price')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Price(*)</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="200,000" value="{{old('price')}}">
                            </div>
                            @if($errors->has('price'))
                                <p style="color: red">{{$errors->first('price')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Description(*)</label>
                                <textarea  class="form-control" id="description" value="{{old('description')}}" name="description"></textarea>
                            </div>
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
                                <div>
                                    <label for="">Image</label>
                                    <br>
                                    <input multiple type="file" value="{{old('thumbnail')}}" name="thumbnail" id="fileToUpload">
                                </div>
                                
                                @if($errors->has('thumbnail'))
                                    <p style="color: red">{{$errors->first('thumbnail')}}</p>
                                @endif
                                <br>
                                <label for="">Danh Mục</label>
                                <a style="float: right" class="btn btn-sm btn-default" data-target="#cate-cate" data-toggle="modal">Add</a>
                                
                                <select class="select_tag form-control" name="category" id="category" value="{{old('category')}}">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{!!$category['name']!!}</option>
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
                                <a style="float: right" class="btn btn-sm btn-default" data-target="#vendor-vendor" data-toggle="modal">Add</a>
                                <select class="select_tag form-control" name="vendor_id" id="vendor_id" value="{{old('vendor_id')}}">
                                    @foreach($vendors as $vendor)
                                        <option value="{{$vendor->id}}">{!!$vendor['name_vendor']!!}</option>
                                    @endforeach                       
                                </select>    
                            </div>
                            @if($errors->has('vendor_id'))
                                <p style="color: red">{{$errors->first('vendor_id')}}</p>
                            @endif
                        
                    </div> 
                             
                </div>
                
                <button class="btn btn-success " style="width: 15%; margin-left: 5%" type="submit"> ADD </button> 
                <br><br><br>
            </form> 
    </div>
</div>
<div class="modal fade" id="cate-cate">
    <div class="modal-dialog" style="margin-right: 0px">
        <div class="modal-content" style="width: 350px">
            <div class="modal-header">
                <h4 class="modal-title">Thêm Danh Mục</h4>
            </div>
            <div class="modal-body">
                <form action="{{asset('')}}admin/storecategory1" method="POST" role="form">
                    @csrf

                    <div class="form-group">
                        <label for="">Name (*)</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" >
                    </div>
                    @if($errors->has('name'))
                        <p style="color: red">{{$errors->first('name')}}</p>
                    @endif
                    <div class="form-group">
                        <label for="">Short_content (*)</label>
                        <input type="text" class="form-control" id="short_content" name="short_content" placeholder="Nội dung ngắn">
                    </div>
                    @if($errors->has('short_content'))
                        <p style="color: red">{{$errors->first('short_content')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="vendor-vendor">
    <div class="modal-dialog" style="margin-right: 0px">
        <div class="modal-content" style="width: 350px">
            <div class="modal-header">
                <h4 class="modal-title">Thêm Nhà Cung cấp</h4>
            </div>
            <div class="modal-body">
                <form action="{{asset('')}}admin/storevendor" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="">Name_Vendor (*)</label>
                        <input type="text" class="form-control" id="name_vendor" name="name_vendor" placeholder="Tên nhà cung cấp" >
                    </div>
                    @if($errors->has('name_vendor'))
                        <p style="color: red">{{$errors->first('name_vendor')}}</p>
                    @endif
                    <div class="form-group">
                        <label for="">Address (*)</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">
                    </div>
                    @if($errors->has('address'))
                        <p style="color: red">{{$errors->first('address')}}</p>
                    @endif
                    <div class="form-group">
                        <label for="">Phone (*)</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
                    </div>
                    @if($errors->has('phone'))
                        <p style="color: red">{{$errors->first('phone')}}</p>
                    @endif
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection