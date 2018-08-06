@extends('layouts.admin')

@section('content')
<div class="content">
    <center>
        <h2 style="color: red"> Sửa category</h2>
        <form action="{{asset('')}}admin/updateVendor/{{$vendor->id}}" method="POST" role="form">
            @csrf
            {{ method_field('put')}}
            <div class="col-md-5 clearfix">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" style="float: left">Name_Vendor (*)</label>
                             <input type="text" class="form-control" id="name_vendor" name="name_vendor" placeholder="Name" value="{{$vendor->name_vendor}}" >
                        </div>
                        @if($errors->has('name_vendor'))
                            <p style="color: red">{{$errors->first('name_vendor')}}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" style="float: left">Phone (*)</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Nội dung" value="{{$vendor->phone}}">
                        </div>
                        @if($errors->has('phone'))
                            <p style="color: red">{{$errors->first('phone')}}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" style="float: left">Addrees (*)</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Nội dung" value="{{$vendor->address}}">
                        </div>
                        @if($errors->has('address'))
                            <p style="color: red">{{$errors->first('address')}}</p>
                        @endif
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
            </div>
    </form>
    </center>
    
</div>
@endsection