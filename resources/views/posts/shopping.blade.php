@extends('layouts.master')
@section('heder')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('content')
			@if(session()->has('thongbao'))
			<div class="container">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session()->get('thongbao')}}
                </div>
            </div>
            @endif
            @if(session()->has('flag'))
			<div class="container">
                <div class="alert alert-success" style="color: red">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session()->get('flag')}}
                </div>
            </div>
            @endif
	<div class="container" style="background: #444430; width: 100%;" >
		<br>
		<center><h3 style="color: white">THÔNG TIN MUA HÀNG</h3></center>
		<div class="col-md-1"></div>
		<div class="col-md-4" id="form-cart">
			<form action="{{asset('')}}dathang" method="POST"  enctype="multipart/form-data" role="form" class="form-horizontal row">
			@csrf
			<div class="form-group">
			<label for="" style="color: white"><i class="fa fa-user"></i>  Họ Tên (*)</label>
			<input type="text" class="form-control"  placeholder="Tên người nhận" name="customer" value="{{old('customer')}}">
			</div>
			<div id="cust"></div>
			@if($errors->has('customer'))
			<p style="color: red">{{$errors->first('customer')}}</p>
			@endif
			<div class="form-group">
			<label for="" style="color: white"><i class="fas fa-phone"></i>  Số điện thoại (*)</label>
			<input type="text" class="form-control"  placeholder="01xxx" name="phone" value="{{old('phone')}}">
			</div>
			@if($errors->has('phone'))
			<p style="color: red">{{$errors->first('phone')}}</p>
			@endif
			<div class="form-group">
			<label for="" style="color: white"><i class="fas fa-map-marker-alt"></i>  Địa chỉ nhận hàng (*)</label>
			<input type="text" class="form-control" placeholder="Số ? ngõ/nghách/hẻm/quận/TP" name="addr" value="{{old('addr')}}">
			</div>
			@if($errors->has('addr'))
			<p style="color: red">{{$errors->first('addr')}}</p>
			@endif
			<div class="form-group">
			<label for="" style="color: white">Hình thức nhận hàng</label>
			<br>
			<input type="radio" checked name="hinhthuc" value="nhận hàng tại nhà" style="color: white"> Nhận hàng tại nhà và thanh toán.
			<br>
			<input style="color: white" type="radio" name="hinhthuc" value="Cửa hàng gần nhất "> Nhận hàng tại cửa hàng gần nhất trong 3 ngày.
			</div>
			<div class="form-group">
			<label for="" style="color: white">Ghi chú</label>
			<textarea  class="form-control"  value="{{old('content')}}" name="content"></textarea>
			</div>
			@if($errors->has('content'))
			<p style="color: red">{{$errors->first('content')}}</p>
			@endif
			<center><button class="btn btn-success btn-customer" style="width: 300px">Đặt Hàng </button></center>
			<br><br>
			</form>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<table class="table table-hover" id="table_cart">
			<thead>
				<tr >
					<th style="color: white">Image</th>
					<th style="color: white">Name</th>
					<th style="color: white">Color</th>
					<th style="color: white">Size</th>
					<th style="color: white">Quantity</th>
					<th style="color: white">Price</th>
					<th style="color: white">Action</th>
				</tr>
			</thead>
				<tbody>
					<form method="POST" action="">
						<input name="_token" type="hidden" value="{!! csrf_token() !!}">
					@foreach($content as $item)
					<tr>
						<td><div><a href="#"><img style="height: 60px" src="{{asset('')}}storage/{{$item->options->image}}" alt=""/></a></div></td>
						<td>{{$item->name}}</td>
						<td><div style="width: 35px;height: 35px;background:{{$item->options->mau}};border-radius: 20% "></div></td>
						<td>{{$item->options->kichthuoc}}</td>
						<input type="hidden" name="row_qty" value="{{$item->rowId}}">
						<td><input class="qty" id="{{$item->rowId}}"" name="qty" type="number" style="width: 40px" value='{{$item->qty}}' /></td>
						<td>{{number_format($item->price * $item->qty,0,",",".")}}</td>
						<td>
							<a href="#" class="btn-shopcart update-item" id_update="{{$item->rowId}}"><i class="fas fa-sync-alt"></i>
							</a>

							<a style="margin-left: 10px" href="" delete_id="{{$item->rowId}}" class="delete-item">
								<i class="fas fa-trash-alt"></i>
							</a>

						</td>
					</tr>
					@endforeach
					</form>
				</tbody>
		</table>
		<div class="cart__bottom">

		<!-- <button class="btn btn--ys btn-checkout">Checkout <span class="icon icon--flippedX icon-reply"></span></button> -->
		<div class="cart__total " style="float: right;color: white">TOTAL : <span >{{$total}} VNĐ</span></div>
		<a href="{{asset('')}}huydathang" class="btn btn--ys"><span class="icon icon-shopping_basket"></span> HỦY</a>
		<br><br>
		</div>
		</div>
	</div>
@endsection
@section('footer')
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		toastr.options = {
		  "closeButton": false,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "positionClass": "toast-top-right",
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
		$j(document).ready(function() {
			 jQuery('.update-item').click(function(e){
			 	e.preventDefault();
			 	var rowid = jQuery(this).attr('id_update');
			 	var qty = jQuery('#' + rowid).val();
			 	var url = "{{asset('capnhat')}}"+"/" + rowid + "/" + qty;
			 	jQuery.ajax({
			 		url: url,
			 		method: "GET",
			 		success: function(res){
			 			 toastr["success"]("Cập Nhật Thành Công !");
			 			 location.reload();
			 		},
			 		error: function(err){
			 			console.log(err);
			 		}
			 	});
			})
			jQuery('.delete-item').click(function(e){
			 	e.preventDefault();
			 	var rowid = jQuery(this).attr('delete_id');
			 	swal({
                title: "Bạn có muốn xóa Sản phẩm này không?",         
                icon: "warning",
                buttons: true,
                dangerMode: true
            }).then(function (willDelete) {
                if (willDelete) {
                    jQuery.ajax({
                        type: 'delete',
                        url: 'xoasp/' + rowid,
                        success: function(response) {
                            location.reload();
                        }
                    });
                    swal("Bạn đã xóa thành công", {
                        icon: "success"
                    });
                } 
            }); 	
		})
	})
	</script>
@endsection
