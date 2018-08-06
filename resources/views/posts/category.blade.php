@extends('layouts.admin')

@section('content')
<div class="content">
     <div class="container">
        <div class="table-responsive">
            @if(session()->has('flag'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session()->get('flag')}}
                </div>
            @endif
            <h2 style="color: red">Danh mục Categries</h2>
            <br>
            
            <table class="table table-hover" id="category-table">
                <a  class="btn btn-sm btn-primary" data-target="#cate-gory" data-toggle="modal"><i class="fas fa-plus-circle" ></i>  Add_Category</a>
               <!--  <a href="{{asset('admin/createcategory')}}" class="btn btn-primary btn-cate" type="button"><i class="fas fa-plus-circle" ></i>  ADD Category  </a> -->
                <br><br>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Short_Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $category)
                        <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->short_content}}</td>
                        <td>
                            <a  href="{{ asset('') }}admin/editcategory/{{$category->id}}">
                                <button  class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            </a>
                            <button  class="btn btn-danger dele-cate" cate_id="{{$category->id}}"><i class="fas fa-trash-alt"></i>
                            </button>    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            </div>

        </div>
        
    </div>
</div>
<div class="modal fade" id="cate-gory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm Category</h4>
            </div>
            <div class="modal-body">
                <form action="{{asset('')}}admin/storecategory" method="POST" role="form">
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
@endsection
@section('footer')
    <script type="text/javascript">

        $(function(){
            var table_dt=$('#category-table');
            $(document).on('click', '.dele-cate', function () {
            var cat_id = $(this).attr('cate_id');
            swal({
                title: "Bạn có muốn xóa không?",
                
                icon: "warning",
                buttons: true,
                dangerMode: true
            }).then(function (willDelete) {
                if (willDelete) {
                    $.ajax({
                        type: 'delete',
                        url: 'deleteCate/' + cat_id,
                        success: function(response) {
                           location.reload();
                           /* $('#category-table').ajax.reload();*/
                        }
                    });
                } 
            });
        });
    });
    </script>
@endsection