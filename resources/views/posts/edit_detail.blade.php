@extends('layouts.admin')

@section('content')
<div class="content">
   <center> <h2 style="color: red">Sửa Category</h2></center>
    <center>
        <form action="{{asset('')}}admin/updateCategory/{{$category->id}}" method="POST" role="form">
            @csrf
            {{ method_field('put')}}
            <div class="col-md-5 clearfix">
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
                            <label for="" style="float: left;">Name (*)</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$category->name}}" >
                        </div>
                        @if($errors->has('name'))
                            <p style="color: red">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="" style="float: left;">Short_Content (*)</label>
                            <input type="text" class="form-control" id="short_content" name="short_content" placeholder="Nội dung" value="{{$category->short_content}}">
                    </div>
                        @if($errors->has('short_content'))
                            <p style="color: red">{{$errors->first('short_content')}}</p>
                        @endif
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
    </form>
    </center>
    
</div>
@endsection

                