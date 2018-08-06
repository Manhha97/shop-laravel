@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="col-md-4 col-lg-3 col-xl-2">
			<div class="filters-block visible-xs">
				<div class="filters-row__select">
					<label>Sort by: </label>
					<div class="select-wrapper">
						<select class="select--ys">
							<option>Position</option>
							<option>Price</option>
							<option>Rating</option>
						</select>
					</div>
					<a href="#" class="sort-direction icon icon-arrow_back"></a> 
				</div>
				<div class="filters-row__select">
					<label>Show: </label>
					<div class="select-wrapper">
						<select class="select--ys">
							<option>25</option>
							<option>50</option>
							<option>100</option>
						</select>
					</div>
				</div>
				<a href="#" class="icon icon-arrow-down active"></a><a href="#" class="icon icon-arrow-up"></a> 
			</div>
			<div class="collapse-block open">
				<h4 class="collapse-block__title">COLOR</h4>
				<div class="collapse-block__content">
					<ul class="options-swatch options-swatch--color options-swatch--lg">
						<li><a href="#"><span class="swatch-label color-black"></span></a></li>
						<li><a href="#"><span class="swatch-label color-grey"></span></a></li>
						<li><a href="#"><span class="swatch-label color-light-grey"></span></a></li>
						<li><a href="#"><span class="swatch-label color-blue"></span></a></li>
						<li><a href="#"><span class="swatch-label color-dark-turquoise "></span></a></li>
						<li><a href="#"><span class="swatch-label color-orange"></span></a></li>
						<li><a href="#"><span class="swatch-label color-purple"></span></a></li>
						<li><a href="#"><span class="swatch-label color-pale-violet-red"></span></a></li>
						<li><a href="#"><span class="swatch-label color-red"></span></a></li>
						<li><a href="#"><span class="swatch-label color-green"></span></a></li>
						<li><a href="#"><span class="swatch-label color-yellow"></span></a></li>
						<li><a href="#"><span class="swatch-label color-tan"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="collapse-block open">
				<h4 class="collapse-block__title">SIZE</h4>
				<div class="collapse-block__content">
					<ul class="options-swatch options-swatch--size options-swatch--lg">
						<li><a href="#">XS</a></li>
						<li><a href="#">S</a></li>
						<li><a href="#">M</a></li>
						<li><a href="#">L</a></li>
						<li><a href="#">XL</a></li>
						<li><a href="#">2XL</a></li>
						<li><a href="#">3XL</a></li>
					</ul>
				</div>
			</div>
			<div class="collapse-block open">
				<h4 class="collapse-block__title ">WOMENS</h4>
				<div class="collapse-block__content">
					<ul class="expander-list">
						<li class="active">
							<a href="#">TOPS</a><span class="expander"></span>
							<ul>
								<li class="active"><a href="#">Blouses &amp; Shirts</a></li>
								<li><a href="#">Dresses</a></li>
							</ul>
						</li>
						<li>
							<a href="#">BOTTOMS</a><span class="expander"></span>
							<ul>
								<li><a href="#">Trousers</a></li>
								<li><a href="#">Jeans</a></li>
								<li><a href="#">Leggings</a></li>
								<li><a href="#">Jumpsuit &amp; shorts</a></li>
								<li><a href="#">Skirts</a></li>
								<li><a href="#">Tights</a></li>
							</ul>
						</li>
						<li>
							<a href="#">ACCESSORIES</a><span class="expander"></span>
							<ul>
								<li><a href="#">Jewellery</a></li>
								<li><a href="#">Hats</a></li>
								<li><a href="#">Scarves &amp; snoods</a></li>
								<li><a href="#">Belts</a></li>
								<li><a href="#">Bags</a></li>
								<li><a href="#">Shoes</a></li>
								<li><a href="#">Sunglasses</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>	
			<div class="collapse-block">
				<h4 class="collapse-block__title">BRANDS</h4>
				<div class="collapse-block__content">
					<ul class="simple-list">
						<li><a href="#">Levi’s </a></li>
						<li><a href="#">Gap</a></li>
						<li><a href="#">Zara</a></li>
						<li><a href="#">Polo</a></li>
						<li><a href="#">Ecco</a></li>
						<li><a href="#">H&amp;M</a></li>
						<li><a href="#">Diesel</a></li>
						<li><a href="#">Bockers</a></li>
						<li><a href="#">Lacoste</a></li>
					</ul>
				</div>
			</div>
			<div class="collapse-block">
				<h4 class="collapse-block__title">GENDER</h4>
				<div class="collapse-block__content">
					<ul class="simple-list">
						<li><a href="#">Men</a></li>
						<li><a href="#">Women</a></li>
						<li><a href="#">Unisex</a></li>
					</ul>
				</div>
			</div>
			<div class="collapse-block open">
				<h4 class="collapse-block__title">COMPARE PRODUCTS</h4>
				<div class="collapse-block__content">
					<div class="compare">
						<div class="compare__item">
							<div class="compare__item__image pull-left"><a href="#"><img src="{{asset('shop_asset/images/anh2.jpg') }}" alt=""></a></div>
							<div class="compare__item__delete"><a href="#" class="icon icon-close"></a></div>
							<div class="compare__item__title">
								<h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
							</div>
						</div>
						<div class="compare__item">
							<div class="compare__item__image pull-left"><a href="#"><img src="{{asset('shop_asset/images/anh3.jpg') }}" alt=""></a></div>
							<div class="compare__item__delete"><a href="#" class="icon icon-close"></a></div>
							<div class="compare__item__title">
								<h2><a href="#">Quis nostrud exercit ation ullamco</a></h2>
							</div>
						</div>
					</div>
					<div><a href="#" class="btn btn--ys btn--md">Compare</a> <a href="#" class="btn btn--ys btn--md btn--light">Clear All</a></div>
				</div>
			</div>
			<div class="collapse-block">
				<h4 class="collapse-block__title">COMMUNITY POLL</h4>
				<div class="collapse-block__content">
					<p class="under-form-text color">What is your favorite color</p>
					<form id="pollForm" action="#">
						<ul class="filter-list">
							<li>
								<label class="radio">
								<input id="radio1" type="radio" name="radios" checked>
								<span class="outer"><span class="inner"></span></span>Green</label>
							</li>
							<li>
								<label class="radio">
								<input id="radio2" type="radio" name="radios">
								<span class="outer"><span class="inner"></span></span>Red</label>
							</li>
							<li>
								<label class="radio">
								<input id="radio3" type="radio" name="radios">
								<span class="outer"><span class="inner"></span></span>Black</label>
							</li>
							<li>
								<label class="radio">
								<input id="radio4" type="radio" name="radios">
								<span class="outer"><span class="inner"></span></span>Magenta</label>
							</li>
						</ul>
						<button type="submit" class="btn btn--ys btn--md btn--light">Vote</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-lg-9 col-xl-10">
			@foreach($postproducts as $postproduct)
			<div class="col-sm-6">
				<a href="{{asset('')}}showcart/{{$postproduct->id}}" postID={{$postproduct->id}} class="banner banner--md link-img-hover">
				<span class="figure">
					<img src="{{asset('') }}/storage/{{$postproduct->thumbnail}}" style="height: 350px; width: 350px" alt="" class="vis-hid-img-small" /> 
					<img src="{{asset('') }}/storage/{{$postproduct->thumbnail}}" alt="" class="vis-hid-img-big" />
					<span class="figcaption">
						<span class="block-table">
							<span class="block-table-cell">
								<span class="banner__title size2">15% OFF</span>
								<span class="text size5"><em>on brand-new models</em></span>
								<span class="btn btn--ys btn--xl">Shop now!</span> 
							</span>
						</span>
					</span>
				</span>
				</a>
			</div>
			@endforeach
			<br>
			<hr>
			<br>
		</div>
	</div>
		
@endsection