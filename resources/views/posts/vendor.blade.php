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
            <h2 style="color: red">Quản lí nhà cung cấp</h2>
            <br>
            
            <table class="table table-hover" id="vendor-table">
               <!--  <a href="{{asset('admin/createVendor')}}" class="btn btn-primary btn-cate" type="button"><i class="fas fa-plus-circle" ></i>  ADD_Vendor  </a> -->
               <a  class="btn btn-sm btn-primary" data-target="#ven-dor" data-toggle="modal"><i class="fas fa-plus-circle" ></i>  Add_Vendor</a>
                <br><br>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>NAME_VENDOR</th>
                        <th>ADDRESS</th>
                        <th>PHONE</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendor as $vendor)
                        <tr>
                        <td>{{$vendor->id}}</td>
                        <td>{{$vendor->name_vendor}}</td>
                        <td>{{$vendor->address}}</td>
                        <td>{{$vendor->phone}}</td>
                        <td>
                            <a  href="{{ asset('') }}admin/editVendor/{{$vendor->id}}">
                                <button  class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            </a>
                            <button  class="btn btn-danger dele-vendor" cate_id="{{$vendor->id}}"><i class="fas fa-trash-alt"></i></button>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            </div>

        </div>
        
    </div>
</div>
<!-- modal -->
<div class="modal fade" id="ven-dor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" role="form">
                    @csrf             
                    <div class="form-group">
                        <label for="">Name_Vendor (*)</label>
                        <input type="text" class="form-control" id="name_vendor" name="name_vendor" placeholder="Tên nhà cung cấp" >
                        <div id="ten">                                    
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Address (*)</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">
                        <div id="diachi">
                                    
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="">Phone (*)</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
                        <div id="sdt">
                                    
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary " id="btn-addvendor">Thêm</button>
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
            var table_dt=$('#vendor-table');
            $(document).on('click', '.dele-vendor', function () {
            var vd_id = $(this).attr('cate_id');
            swal({
                title: "Bạn có muốn xóa không?",
                
                icon: "warning",
                buttons: true,
                dangerMode: true
            }).then(function (willDelete) {
                if (willDelete) {
                    $.ajax({
                        type: 'delete',
                        url: 'deleteVendor/' + vd_id,
                        success: function(response) {
                            location.reload();
                        }
                    });
                   /* swal("Bạn đã xóa thành công", {
                        icon: "success"
                    });*/
                } 
            });
        });
    });

    </script>
    <script>
        $(document).on('click','#btn-addvendor',function(e){
        e.preventDefault();
        var data= new FormData();
        data.append('name_vendor', $('#ven-dor').find('input[name="name_vendor"]').val());
        data.append('phone', $('#ven-dor').find('input[name="phone"]').val());
        data.append('address', $('#ven-dor').find('input[name="address"]').val());
        $.ajax({
        url: 'storevendor', 
        data: data,
        type: 'POST',
        contentType: false,
        processData: false,
        success : function(data){
            console.log(data);
            if (data='yes') {
                /* $('#ven-dor').modal('hide');*/
                toastr.success('Thêm mới thành công',{ fadeAway: 10000 });
                location.reload();
            }
        },
        error: function(data){
           $.each(data.responseJSON.errors, function(key,value) {

                if(key=='name_vendor'){
                    $('#ten').html("");
                    $('#ten').append('<p style="color: red;">'+value+'</p');
                }
                if(key=='address'){
                    $('#diachi').html("");
                    $('#diachi').append('<p style="color: red;">'+value+'</p');
                }
                if(key=='phone'){
                    $('#sdt').html("");
                    $('#sdt').append('<p style="color: red;">'+value+'</p');
                }

            }); 
        }
    })     
});
    </script>
@endsection