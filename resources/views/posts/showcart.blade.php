@extends('layouts.master')
@section('heder')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('content')
	<div class="container">
		<hr style="content: black; height: : 10%">
		<div class="row product-info-outer">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="product-main-image">
					<div class="product-main-image__item"><img src='{{asset('')}}storage/{{$showdetail->thumbnail}}' alt="" /></div>
					<br><h4>{{$showdetail->name}}</h4>
					<div>
						<i class="fas fa-star" style="color: #c5e60e"></i>
                        <i class="fas fa-star" style="color: #c5e60e"></i>
                        <i class="fas fa-star" style="color: #c5e60e"></i>
                        <i class="fas fa-star" style="color: #c5e60e"></i>
                        <i class="fas fa-star-half-alt" style="color: #c5e60e"></i>
					</div>
				</div>
			</div>
			<div class="product-info col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div>
					<h4>{{$showdetail->name}}</h4>
				</div>
					<div class="wrapper">
					<div class="product-info__sku pull-left"><b>Giá :</b> <strong style="color: red">{{number_format($showdetail->price)}}  VNĐ</strong></div>
					

					<div class="product-info__availabilitu pull-right">BY:   <strong class="color"><a href="https://www.facebook.com/hahongmanh19971997">Mạnh Hà</a></strong></div>
					</div>
					<div class="product-info__description">
						<div class="product-info__description__text">{{$showdetail->description}}. Các tín đồ thời trang hẳn không còn lạ gì với tên gọi này. Minimalism được lấy cảm hứng từ nghệ thuật gấp giấy origami Nhật Bản, với những thiết kế tiết chế hết mức có thể những đường chiết li, chi tiết cầu kỳ, chỉ giữ lại phom dáng cơ bản và màu sắc cũng được đơn giản hóa...</div>
					</div>
					
				<table class="table table-hover" id="detailtable">
	                <thead>
	                    <tr>
	                        <th>MÃ CODE</th>
	                        <th>Size</th>
	                        <th>Màu</th>
	                        <th>Số lượng còn</th>
	                        <th>Lựa chọn</th>
	                      
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($product as $product)
                        <tr>
                     		<td>{{$product->code}}</td>
                     		<td>{{$product->size_id}}</td>
                     		<td><div style="width: 50px;height: 50px;background:{{$product->color_id}};border-radius: 20% "></div></td>
                     		<td><center>{{$product->quantity}}</center></td>
                     		
                     		<td><a href="{{asset('')}}muahang/{{$product->id}}" cartid="{{$product->id}}" class="add-cart"><i class="fa fa-plus-circle"></i>Thêm vào giỏ</a></td>
                     		
	                    </tr>
	                    @endforeach
	                    
	                </tbody>
	            </table>
	            <a href="{{asset('')}}shopping">
	            	<button class="btn btn-success" style="width: 200px"> <i style="color: blue" class="fas fa-cart-plus"></i>  Tới Giỏ Hàng  <i class="fas fa-arrow-right"></i></button>
	            </a>
	            
			</div>
		</div>
	</div>
	<br><br>
	<hr style="content: black; height: : 10%">

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
			 jQuery('.add-cart').click(function(e){
			 	e.preventDefault();
			 	var rowid = jQuery(this).attr('cartid');	
			 	var url = "{{asset('muahang')}}"+"/" + rowid;
			 	jQuery.ajax({
			 		url: url,
			 		method: "GET",
			 		success: function(res){
			 			 location.reload();
			 			 toastr["success"]("Thêm Giỏ Hàng Thành Công.");
			 		},
			 		error: function(err){
			 			console.log(err);
			 		}
			 	});
			})
		})
	</script>
@endsection