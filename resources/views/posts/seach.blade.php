@extends('layouts.master')
@section('content')
	<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-xl-8">
						<!-- title -->
						<div class="title-box">
							<h2 class="text-center text-uppercase title-under">FEATURED PRODUCTS</h2>
						</div>
						<!-- /title -->
						<p style="color: blue">Tìm thấy : {{count($reach_product)}} Sản phẩm</p>
						<div class="product-listing carousel-products-mobile row">
						@foreach($reach_product as $postproduct)
							<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
								<!-- product -->
								<div class="product product--zoom">
									<div class="product__inside">
										<!-- product image -->
										<div class="product__inside__image">
											<!-- product image carousel -->
											<div class="product__inside__carousel slide" data-ride="carousel">
												<div class="carousel-inner" role="listbox">
													<div class="item active" postID={{$postproduct->id}}> <a href="{{asset('')}}showcart/{{$postproduct->id}}"><img style=" height: 330px;" src="{{asset('') }}/storage/{{$postproduct->thumbnail}}" alt=""></a> </div>
													<div class="item" postID={{$postproduct->id}}> <a href="product.html"><img style=" height: 330px;"  src="{{asset('') }}/storage/{{$postproduct->thumbnail}}" alt=""></a> </div>
													
												</div>
												<!-- Controls --> 
												<a class="carousel-control next"></a> <a class="carousel-control prev"></a> 
											</div>
											<!-- /product image carousel -->  
											<!-- quick-view --> 
											<a href="{{asset('')}}showcart/{{$postproduct->id}}" postID={{$postproduct->id}} data-toggle="modal"  class="quick-view"><b><span class="icon icon-visibility"></span> Quick view</b> </a> 
											<!-- /quick-view --> 
											<!-- countdown_box -->
											<div class="countdown_box">
												<div class="countdown_inner">
													<div id="countdown1"></div>
												</div>
											</div>
											<!-- /countdown_box --> 
										</div>
										<!-- /product image --> 
										<!-- label news -->
										<div class="product__label product__label--right product__label--new"> <span>new</span> </div>
										<!-- /label news --> 
										<!-- label sale -->
										<div class="product__label product__label--left product__label--sale"> <span>Sale<br>
											-10%</span> 
										</div>
										<div class="product__inside__name">
											<h2><a href="product.html">{{$postproduct->name}}</a></h2>
										</div>
										<div class="product__inside__description row-mode-visible"> {{$postproduct->description}}</div>
										<div class="product__inside__price price-box">{{number_format($postproduct->price)}}<span style="color: red">VNĐ</span></div>
										<div class="product__inside__review row-mode-visible">
											<div class="rating row-mode-visible"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
											<a href="#">1 Review(s)</a> <a href="#">Add Your Review</a> 
										</div>
										<!-- /product review --> 
										<div class="product__inside__hover">
											<!-- product info -->
											<div class="product__inside__info">
												<!-- Màu ơ đây -->
												<ul class="options-swatch options-swatch--color">
													<li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/blue.png') }}"  alt=""/></span></a></li>
													<li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/yellow.png') }}"  alt=""/></span></a></li>
													<li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/red.png') }}"  alt=""/></span></a></li>
												</ul>
												<div class="product__inside__info__btns">
												<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-favorite_border"></span></a>
												<a href="#" class="btn btn--ys btn--xl visible-xs"><span class="icon icon-sort"></span></a>
												<a href="#" class="btn btn--ys btn--xl  row-mode-visible hidden-xs"><span class="icon icon-visibility"></span> Quick view</a> </div>
												<ul class="product__inside__info__link hidden-xs">
													<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
													<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#" class="compare-link"><span class="text">Add to compare</span></a></li>
												</ul>
											</div>
											<!-- /product info --> 
											<!-- product rating -->
											<div class="rating row-mode-hide"> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star"></span> <span class="icon-star empty-star"></span> </div>
											<!-- /product rating -->
										</div>
									</div>
								</div>
								<!-- /product --> 
							</div>
						@endforeach	
						</div>
						
					</div>
					<!-- lookbook -->
					<!-- <div class="col-xl-4 visible-xl">
						title
						<div class="title-box">
							<h2 class="text-left text-uppercase title-under pull-left">LOOKBOOK</h2>
						</div>
						/title
						
						<a class="link-img-hover" href="lookbook.html"><img src="{{asset('shop_asset/images/custom/lookbook.jpg') }}" class="img-responsive" alt=""></a>
						
					</div> -->
					<!-- /lookbook -->
				</div>
			</div>
		</div>


@endsection
@section('footer')
	<script></script>
	<script type="text/javascript" src="{{asset('js/shopcart.js')}}"></script>
@endsection
