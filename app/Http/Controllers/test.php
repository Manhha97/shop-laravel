                @extends('admin_layouts.app')

@section('content')
    <div class="card-body table-responsive">
        <a href="{{asset('')}}admin/add" class="btn btn-info" style="margin-bottom: 20px">ADD PRODUCT</a>
        
        <table class="table table-bordered" id="product-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Vendor ID</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Quantity</th>
                    <th style="width: 95px;">Action</th>
                </tr>
            </thead>
        </table>       
    </div>

    <div id="show" class="modal fade" role="dialog">
        <div class="modal-dialog" style="margin-left: 300px">
        <!-- Modal content-->
            <div class="modal-content" style="width: 900px; height: 700px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Information Product</h4>
                </div>
                <div class="modal-body">
                    <div class="container"> 
                        <div class="row">
                            <div class="col-md-6" >
                                <img src="" id="image" alt="" style="width: 400px; height: 450px">
                            </div>
                            <div class="col-md-6">
                                <h1 id="name"></h1>
                                <div class="container">
                                    <i class="fas fa-star" style="color: #c5e60e"></i>
                                    <i class="fas fa-star" style="color: #c5e60e"></i>
                                    <i class="fas fa-star" style="color: #c5e60e"></i>
                                    <i class="fas fa-star" style="color: #c5e60e"></i>
                                    <i class="fas fa-star-half-alt" style="color: #c5e60e"></i>
                                    <a href="">(Xem đánh giá)</a> <br>
                                    <p style="float: left;">Thương hiệu: </p>
                                    <b id="vendor" style="float: left; padding-bottom: 10px"></b>
                                </div>
                                <hr color="gray"; width="95%"; align="center" size="0.5px" style="margin-top: 3rem">
                                <span id="price" style="color: #ea0b0b; font-size: 38px"></span>
                                <span style="color: #ea0b0b; font-size: 35px">đ</span>
                                <h2>Tiết kiệm: 30%</h2>
                                <p>Giá thị trường: 548.000 ₫</p>
                                <hr color="gray"; width="95%"; align="center" size="0.5px">
                                <b>Mô tả: </b>
                                <span id="description"></span> <br>
                                <b>Kích thước: </b>
                                <span id="size"></span>  <br>
                                <b>Màu sắc: </b>
                                <span id="color"></span> <br>
                                <b>Số lượng: </b>
                                <span id="quantity"></span>
                            </div>       
                        
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
            </div>
            <!-- /.modal-content --> 
        </div>
        <!-- /.modal-dialog --> 
    </div>
    
@endsection


@section('footer')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
<script type="text/javascript">

    // $(function(){
    //     var table = $('#product-table').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: 'getlist',
    //         columns: [
    //             { data: 'code', name: 'code' },
    //             { data: 'name', name: 'name' },
    //             { data: 'vendor_id', name: 'vendor_id' },
    //             { data: 'action', name: 'action' },

    //         ]
    //     });
    // })
</script>
@endsection