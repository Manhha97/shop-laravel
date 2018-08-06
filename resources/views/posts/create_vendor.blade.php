@extends('layouts.admin')

@section('content')
<div class="content">
    <form action="{{asset('')}}admin/storeVendor" method="POST" role="form">
            @csrf
            <legend style="color: red">Thêm mới Vendor</legend>
        
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
@endsection