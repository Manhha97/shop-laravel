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
            <center><h2 style="color: red">DANH SÁCH ĐƠN HÀNG </h2></center>
            <br>
            <form action="{{asset('')}}admin/bill" method="get">
                <div class="input-outer" style="float: right;">
                    <input type="search" name="key" value="" maxlength="128" placeholder="Tìm kiếm">
                    <button type="submit" title=""><i class="fas fa-search"></i></button>
                </div>                                  
            </form>
            <table class="table table-hover" id="bill-table">
                <br><br>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Customer_id</th>
                        <th>Product_id</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tổng tiền</th>
                        <th>Hình thức</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bill as $bill)
                    <tr>
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->customer_id}}</td>
                        <td>{{$bill->product_id}}</td>
                        <td>{{$bill->ten_sp}}</td>
                        <td>{{$bill->soluong}}</td>
                        <td>{{$bill->total}}</td>
                        <td>{{$bill->hinhthuc}}</td>
                        <td>
                            <a  href="">
                                <button  class="btn btn-success show-bill" bill_id="{{$bill->id}}"><i class="fas fa-eye"></i></button>
                            </a>
                            <button  class="btn btn-danger del-bill" bill_id="{{$bill->id}}"><i class="fas fa-trash-alt"></i>
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
<div class="modal fade" id="detail-bill">
    <div class="modal-dialog">
        <div class="modal-content"  style="width: 1100px; height: 480px; margin-left: -200px">
            <div class="modal-header">
                <span ><h5 style="float: left;">Chi tiết hóa đơn số: <p style="color: red" id="id_hoadon"></p> </h5>
                
                </span>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                    <div class="col-md-3" >
                       <img src="{{asset('storage::url()')}}" id="imgbill" alt="" style="width: 320px; height: 320px">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-3" >
                        <h4 id="tensp"></h4>
                        <h5 style="float: left;">Kích Thước :  </h5>
                        <h5 id="kichthuoc" style="color: red"></h5>
                        <h5 style="float: left;">Số lượng :  </h5>
                        <h5 id="soluong" style="color: red"></h5>
                        <h5 style="float: left;">Giá 1 SP :  </h5>
                        <h5 id="gia1sp" style="color: red"></h5>
                        <h5 style="float: left;">Tổng Tiền :  </h5>
                        <h5 id="tongtien" style="color: red"></h5>
                        
                        <p id="time"></p>
   
                    </div>
                    <div class="col-md-5">
                        <h5 style="float: left;">Khách Hàng :  </h5>
                        <h5 id="khachhang" style="color: red"></h5>
                        <h5 style="float: left;">Số điện thoại : + </h5>
                        <h5 id="sdt" style="color: red"></h5>
                        <h5 style="float: left;">Địa chỉ :  </h5>
                        <h5 id="diachi" style="color: red"></h5>
                        <h5 style="float: left;">Hình thức :  </h5>
                        <p id="hinhthuc"></p>
                        
                    </div>
                    </div>
                </div>              
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
    $('#bill-table').on('click', '.del-bill', function () {
        var urlDelete = $(this).attr('bill_id');
        swal({
            title: "Bạn có muốn xóa không?",
            
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then(function (willDelete) {
            console.log(urlDelete);
            if (willDelete) {
                $.ajax({
                    type: 'delete',
                    url: 'deletebill/'+ urlDelete,
                    success: function success(response) {
                        // $this.parent('tr').remove();
                        location.reload();
                    }
                });
            } 
        });
    });
    $('#bill-table').on('click', '.show-bill', function (e) {     
        e.preventDefault();
        var bill_id = $(this).attr('bill_id');
        /*alert(bill_id);*/
        $('#detail-bill').modal('show');
        $.ajax({
            type: 'get',
            url: 'show/bill/' + bill_id,
            success: function(response) {
                console.log(response[0]);
                $('#id_hoadon').text(response[0].id);
                $('#product_id').text(response[0].product_id);
                $('#customer_id').text(response[0].customer_id);
                $('#tensp').text(response[0].ten_sp);
                $('#soluong').text(response[0].soluong);
                $('#kichthuoc').text(response[0].kich_thuoc);
                $('#gia1sp').text(response[0].gia);
                $('#tongtien').text(response[0].total);
                $('#hinhthuc').text(response[0].hinhthuc);
                $('#khachhang').text(response[0].name);
                $('#sdt').text(response[0].phone);
                $('#diachi').text(response[0].addr);
                $('#time').text(response[0].created_at);
                $('#imgbill').attr('src', 'http://shop.zent/storage/'+response[0].thumbnail);
            }
        });
    });
        
    </script>
@endsection
  <!-- location.reload(); -->