@extends('layouts.admin')

@section('content')
<div class="content">
    <form action="{{asset('')}}admin/storecategory" method="POST" role="form">
            @csrf
            <legend style="color: red">Thêm mới Category</legend>
        
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
@endsection