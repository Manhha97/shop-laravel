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
            <h2 style="color: red">Chi tiết sản phẩm</h2>
            <br>
            
            <table class="table table-hover" id="detailtable">
                <a href="{{asset('admin/createVendor')}}" class="btn btn-primary btn-cate" type="button"><i class="fas fa-plus-circle" ></i>  ADD_Chi Tiết  </a>
                <br><br>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>ID-SP</th>
                        <th>Số lượng</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>Action</th>
                        <!-- <th>PHONE</th>
                        <th>Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $detail)
                        <tr>
                        <td>{{$detail->id}}</td>       
                        <td>{{$detail->product_id}}</td>
                         <td>{{$detail->quantity}}</td>
                        <td><div style="width: 50px;height: 50px;background:{{$detail->color_id}};border-radius: 20% "></div></td>
                        <td>{{$detail->size_id}}</td>
                        <td>
                            <a href="">
                                
                            </a>
                            <button  class="btn btn-warning" id="edit_abc" editid="{{$detail->id}}"><i  class="fas fa-edit"></i></button>
                            <form action="{{ asset('') }}admin/deletecolor1/{{$detail->id}}" style="display:inline-block;" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button  class="btn btn-danger edit_button" ><i class="fas fa-trash-alt"></i></button>
                            </form> 
                        </td>
                        
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            </div>

        </div>
        
    </div>
</div>
<div class="modal fade" id="edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
               <form action="#" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row" id="form-detail">
                @csrf
                {{ method_field('put')}}
                <div class="col-md-1"></div>
                <div class="col-md-10">            
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">ID_DETAIL</label>
                                <input type="text" class="form-control" id="id_detail" name="IdDetail">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="text" class="form-control" id="product_id" placeholder="Code" name="product_id" value="" disabled>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Số Lượng(*)</label>
                                <input type="text" class="form-control" id="quantity" placeholder="Name" name="quantity" value="">
                            </div>
                            @if($errors->has('quantity'))
                                <p style="color: red">{{$errors->first('quantity')}}</p>
                            @endif
                        </div>                  
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Size(*)</label>
                                <input type="text" class="form-control" id="size_id" placeholder="Nhập giá nhập" name="size_id" value="">
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div style="display: inline-block;margin-right: 90px"  class="form-group">
                                <label for="">Color</label><br>
                                <input name="color_id" style="width: 198px; height: 30px" type="color"  id="color_id">
                            </div>
                            @if($errors->has('original_price'))
                                <p style="color: red">{{$errors->first('original_price')}}</p>
                            @endif
                        </div>
                    </div>
                              
                </div>
                <div class="col-md-1"></div>                        
                </div>
                
                <button class="btn btn-success click-update " id="click-update" style="width: 15%; margin-left: 5%" type="submit"> UPDATE</button> 
                <br><br>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
@section('footer')
    <script>
        $('#detailtable').on('click', '#edit_abc', function () {
        $('#edit-modal').modal('show');
        var id_detail1 = $(this).attr('editid');
        /*alert(id_detail1);*/
        $.ajax({
            type: 'get',
            url: 'showedit/' + id_detail1,
            success: function(response) {
                console.log(response[0]);
                $('#id_detail').val(response[0].id);
                $('#product_id').val(response[0].product_id);
                $('#quantity').val(response[0].quantity);
                $('#color_id').val(response[0].color_id);
                $('#size_id').val(response[0].size_id);
            }
        });
    });
    $('#detailtable').on('click','#click-update',function(e){
        e.preventDefault();
       
       var editID= $('#form-detail').find("input[name='IdDetail']").val();
      
        console.log(editID);
        
          $.ajax({
            type:'post',
            url: '/update/detail/'+ editID,
                success : function(data){
                    if(data == "yes"){
                        $('#edit-modal').modal('toggle');
                        location.reload();
                    }
                }
           
          })

        });
    </script>
@endsection

