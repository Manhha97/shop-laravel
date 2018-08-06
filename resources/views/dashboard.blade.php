@extends('layouts.admin')

@section('content')

<div class="container table-responsive">
    
    <center><h2 style="color: red">DANH SÁCH SẢN PHẨM</h2></center>
    @if(session('flag'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Thông báo: </strong>{{session('flag')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
            </button>
        </div>
    @endif()

    <a href="{{asset('admin/addpost')}}" class="btn btn-primary" type="button"><i class="fas fa-plus-circle"></i>  ADD NEW PRODUCT  </a>
    <br><br>

    <table class="table table-bordered" id="posts-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Vendor</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>  
    </table>
    
</div>
<div class="modal fade" id="show-product">
    <div class="modal-dialog" style="margin-left: 300px">
        <div class="modal-content" style="width: 900px; height: 700px">
            <div class="modal-header">
                <h4 class="modal-title" style="color: red">Chi Tiết Sản Phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>    
            </div>
            <div class="modal-body">
                    <div class="container"> 
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-6" >
                                <img src="{{asset('Storage::url()')}}" id="img" alt="" style="width: 400px; height: 450px">
                            </div>
                            <div class="col-md-5">
                                <h1 id="name"></h1>
                                <div class="container">
                                    <i class="fas fa-star" style="color: #c5e60e"></i>
                                    <i class="fas fa-star" style="color: #c5e60e"></i>
                                    <i class="fas fa-star" style="color: #c5e60e"></i>
                                    <i class="fas fa-star" style="color: #c5e60e"></i>
                                    <i class="fas fa-star-half-alt" style="color: #c5e60e"></i>
                                    <a href="https://www.zanado.com/quan-ao-nam-259.html">(Xem đánh giá)</a>
                                    <h3 style="float: left;">Thương hiệu: </h3>
                                    <h3 id="name_vendor" style="color: red"></h3>
                                    <b  style="float: left; padding-bottom: 10px"></b>
                                    <!-- <h3>Mô tả: </h3> -->
                                    <span id="description"></span> Các tín đồ thời trang hẳn không còn lạ gì với tên gọi này. Minimalism được lấy cảm hứng từ nghệ thuật gấp giấy origami Nhật Bản, với những thiết kế tiết chế hết mức có thể những đường chiết li, chi tiết cầu kỳ, chỉ giữ lại phom dáng cơ bản và màu sắc cũng được đơn <br>
                                </div>
                                <hr color="gray"; width="95%"; align="center" size="0.5px" style="margin-top: 3rem">
                                <h3 style="color: blue">Tiết kiệm: 30%</h3>
                                <span id="price" style="color: #ea0b0b; font-size: 38px"></span>
                                <span style="color: #ea0b0b; font-size: 35px">đ</span>
                                
                                <!--     <h2 id="size_id"></h2> -->
            
                                <hr color="gray"; width="95%"; align="center" size="0.5px">
                                
                                <!-- <b>Màu sắc: </b>
                                <span id="color"></span> <br>
                                <b>Số lượng: </b>
                                <span id="quantity"></span> -->
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


<div class="modal fade" id="show-detail">
    <div class="modal-dialog" >
        <div class="modal-content" style="width: 800px">
            <div class="modal-header">
                <h4 class="modal-title" style="color: red">Danh Sách Chi tiết</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" id="postdetail-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Action</th>
                        </tr>
                    </thead>  
                </table>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detail_chitiet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" style="color: red">Thêm Chi tiết</h3>
            </div>
            <div class="modal-body">
                <div id="page-wrapper">
        
        
            <form action="" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal row" id="form_detail">
                @csrf
                <div class="col-md-1"></div>   
                <div class="col-md-10">            
                    <div class="card card-primary">
                        <div class="card-body">
                            <label for="">ID Sản phẩm</label>
                              
                                <input type="text" class="form-control" id="pr_dt" placeholder="" name="product_id">
                            <div class="form-group">
                                <label for="">Quantity(*)</label>
                                <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity">
                                <div id="sl">
                                    
                                </div>
                            </div>
                            @if($errors->has('quantity'))
                                <p style="color: red">{{$errors->first('quantity')}}</p>
                            @endif
                        </div>                  
                        
                        <div class="card-body">
                             <div class="form-group">
                                <label for="">Size</label><br>
                                <div id="ao" class="size">
                                    <label for="">S</label>
                                    <input style="margin-right: 15px" name="size_id[]" type="radio" value="S">
                                    <label for="">M</label>
                                    <input style="margin-right: 15px" name="size_id[]" type="radio" value="M">
                                    <label for="">L</label>
                                    <input style="margin-right: 15px" checked name="size_id[]" type="radio" value="L">
                                    <label for="">XL</label>
                                    <input style="margin-right: 15px" name="size_id[]" type="radio" value="XL">
                                    <label for="">XXL</label>
                                    <input style="margin-right: 15px" name="size_id[]" type="radio" value="XXL">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div style="display: inline-block;margin-right: 90px"  class="form-group">
                            <label for="">Color</label><br>
                            <input name="color_id" style="width: 198px; height: 30px" type="color" value="#4fdbd1">
                        </div>
                        </div>

                     <button type="submit" id="btn_add_product" class="btn btn-primary">Add</button>
                </div>
                <div class="col-md-1"></div>  
                              
                </div>
                 
                <br><br><br>
            </form> 
    </div>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <script>
        $(document).on('click','#btn_add_product',function(e){
    e.preventDefault();
    $.ajax({
        url: 'detailstrore',
        method: 'POST',
        data : $('#detail_chitiet').find('form').serialize(),
        success : function(data){
            if(data.success == "yes"){
                $('#detail_chitiet').modal('toggle');
                location.reload();

            }
            
        },
        error: function(data){
           $.each(data.responseJSON.errors, function(key,value) {

                if(key=='quantity'){
                    $('#sl').html("");
                    $('#sl').append('<p style="color: red;">'+value+'</p');
                }

            }); 
        }
    })     
});
    </script>


    <script type="text/javascript">
        var asset='{{asset('/')}}';
        console.log(asset);
    </script>
    <script type="text/javascript" src="{{asset('js/home.js')}}"></script>
  
@endsection

