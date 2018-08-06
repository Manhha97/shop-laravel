@extends('layouts.admin')

@section('content')
<div class="content">
     <div class="container">
        <div class="table-responsive">
            <center><h2 style="color: red">Danh Sách Người Dùng </h2></center>
            <br>
            <form action="{{asset('')}}admin/danhsach" method="get">
                <div class="input-outer" style="float: right;">
                    <input type="search" name="keycustom" value="" maxlength="128" placeholder="Tìm kiếm">
                    <button type="submit" title=""><i class="fas fa-search"></i></button>
                </div>                                  
            </form>
                <table class="table table-hover" id="customer-table">
                    <br><br>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Khách Hàng</th>
                            <th>Điện Thoại</th>
                            <th>Địa Chỉ</th>
                            <th>Ghi chú</th>
                            <th>Ngày mua Hàng</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->phone}}</td>
                            <td>{{$list->addr}}</td>
                            <td>{{$list->content}}</td>
                            <td>{{$list->created_at}}</td>
                            <td>
                                <button  class="btn btn-danger del-cust" cust_id="{{$list->id}}"><i class="fas fa-trash-alt"></i>
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

@endsection
@section('footer')
    <script type="text/javascript">
        $('#customer-table').on('click', '.del-cust', function () {
        var urlDelete = $(this).attr('cust_id');
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
                    url: 'deletecustomer/'+ urlDelete,
                    success: function success(response) {
                        // $this.parent('tr').remove();
                        location.reload();
                    }
                });
            } 
        });
    });
    </script>
@endsection
  <!-- location.reload(); -->