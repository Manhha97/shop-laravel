<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>SHOP-shop</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
		<link rel="stylesheet" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{asset('shop_asset/external/slick/slick.css') }}">
		<link rel="stylesheet" href="{{asset('shop_asset/external/slick/slick-theme.css') }}">
		<link rel="stylesheet" href="{{asset('shop_asset/external/magnific-popup/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{asset('shop_asset/external/bootstrap-select/bootstrap-select.css') }}">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{asset('shop_asset/external/rs-plugin/css/settings.css') }}" media="screen">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{asset('shop_asset/css/style.css') }}">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="{{asset('shop_asset/font/style.css') }}">
		<!-- Head Libs -->	
		<!-- Modernizr -->
		<script src="{{asset('shop_asset/external/modernizr/modernizr.js') }}"></script>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	@yield('heder')
	</head>
	<body class="index">				  
		<div id="loader-wrapper">
			<div id="loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->
		<div class="hidden">
			<nav id="off-canvas-menu">				
				<ul class="expander-list">				
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="{{asset('/')}}"><span class="act-underline">Home</span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links-layout" role="menu">												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-1.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 1 (Default)</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-02.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-2.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 2</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-03.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-3.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 3</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-04.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-4.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 4</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-05.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-5.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 5</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-06.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-6.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 6</span>
								</a>
								</span>											
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-07.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-7.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 7</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-08.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-8.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 8</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-09.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-9.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 9</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-10.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-10.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 10</span>
								</a>
								</span>
							</li>												
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-11.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-11.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 11</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="index-12.html">
								<span class="figure"><img class="img-responsive img-border" src="{{asset('shop_asset/images/custom/layout-img-12.jpg') }}" alt=""/><span class="btn btn--ys btn--lg">LAUNCH</span></span>
								<span class="figcaption">Home page - Layout 12</span>
								</a>
								</span>
							</li>
						</ul>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="listing.html"><span class="act-underline">LISTING</span></a>
						</span>						
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/listing-img-1.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">left column</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-left-right-col.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/listing-img-2.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">left, right column</span>
								</a>
								</span>
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-col-right_03.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/listing-img-3.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">right column</span>
								</a>
								</span>											
							</li>
							<li class="col-one-fourth">
								<span class="image-link">
								<a href="listing-without-col-04.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/listing-img-4.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">without columns</span>
								</a>
								</span>
							</li>
							
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="product.html"><span class="act-underline"><span class="act-underline">PRODUCT</span></span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-third">
								<span class="image-link">
								<a href="product-small.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/product-menu-img-1.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - small</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="product.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/product-menu-img-2.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - medium</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="product-big.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/product-menu-img-3.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">image size  - big</span>
								</a>
								</span>											
							</li>
						</ul>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="blog-layout-1.html"><span class="act-underline">BLOG</span></a>
						</span>
						<ul class="dropdown-menu megamenu image-links" role="menu">							
							<li class="col-one-third">
								<span class="image-link">
								<a href="blog-layout-1.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/blog-menu-img-1.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 1</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="blog-layout-2.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/blog-menu-img-2.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 2</span>
								</a>
								</span>
							</li>
							<li class="col-one-third">
								<span class="image-link">
								<a href="blog-layout-3.html">
								<span class="figure"><img class="img-responsive" src="{{asset('shop_asset/images/custom/blog-menu-img-3.png') }}" alt=""/></span>
								<span class="figcaption text-uppercase">blog - Layout 3</span>
								</a>
								</span>											
							</li>
						</ul>
					
					
				</ul>
			</nav>
		</div>		
	    <!-- /mobile menu -->
		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-6 col-xl-7">
							<!-- logo start --> 
							<a href="{{asset('/')}}"><img class="logo replace-2x img-responsive" src="{{ asset('shop_asset/images/manhha.png')}}" alt=""/> </a> 
							<!-- logo end --> 
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right">
							<!-- slogan start -->
							<div class="slogan"> Welcome To MẠNH HÀ !!! </div>
							<!-- slogan end --> 						
							<div class="settings">
								<!-- currency start -->
								<div class="currency dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Currency:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> USD<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="#">GBP - British Pound Sterling</a></li>
										<li><a href="#">EUR - Euro</a></li>
										<li><a href="#">USD - US Dollar</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
								<!-- currency end --> 
								<!-- language start -->
								<div class="language dropdown text-right">
									<div class="dropdown-label hidden-sm hidden-xs">Language:</div>
									<a class="dropdown-toggle" data-toggle="dropdown"> English<span class="caret"></span></a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="#">English</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
										<li><a href="#">Russian</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
								<!-- language end --> 
							</div>
						</div>
					</div>
				</div>
				<div class="stuck-nav">
					<div class="container offset-top-5">
						<div class="row">
							<div class="pull-left col-sm-9 col-md-9 col-lg-10">
								<!-- navigation start -->
								<nav class="navbar">
									<div class="responsive-menu mainMenu">									
										<!-- Mobile menu Button-->
										<div class="col-xs-2 visible-mobile-menu-on">
											<div class="expand-nav compact-hidden">
												<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
													<div class="navbar-toggle"> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="icon-bar"></span> 
														<span class="menu-text">MENU</span> 
													</div>
												</a>
											</div>
										</div>
										<!-- //end Mobile menu Button -->
										<ul class="nav navbar-nav">
											<li class="dl-close"><a href="#"><span class="icon icon-close"></span>close</a></li>										
											<li class="dropdown dropdown-mega-menu">											
												<a href="{{asset('/')}}" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">Home</span></a>
												
											</li>											
											<li class="dropdown dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">LISTING</span></a>
												<ul class="dropdown-menu multicolumn two-col" role="menu">
													<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>			
													@foreach($categories as $category)				
													<li><a href="{{asset('')}}category/{{$category->id}}">{{$category->name}}</a></li>
													@endforeach
													
												</ul>
											</li>
											<li class="dropdown dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">VENDOR</span></a>
												<ul class="dropdown-menu multicolumn two-col" role="menu">
													<li class="dl-back"><a href="#"><span class="icon icon-chevron_left"></span>back</a></li>			
													@foreach($vendors as $vendor)				
													<li><a href="{{asset('')}}postvendor/{{$vendor->id}}">{{$vendor->name_vendor}}</a></li>
													@endforeach
													
												</ul>
											</li>
											
											
										</ul>
									</div>
								</nav>
							</div>
							<!-- navigation end -->
							<div class="pull-right col-sm-3 col-md-3 col-lg-2">
								<div class="text-right">	
									<!-- search start -->
									<div class="search link-inline">
										<a href="#" class="search__open"><span class="icon icon-search"></span></a>
										<div class="search-dropdown">
											<form action="{{asset('')}}search" method="get">
												<div class="input-outer">
													<input type="search" name="search" value="" maxlength="128" placeholder="SEARCH:">
													<button type="submit" title="" class="icon icon-search"></button>
												</div>
												<a href="" class="search__close"><span class="icon icon-close"></span></a>									
											</form>
										</div>
									</div>
									<!-- search end -->										
									<!-- account menu start -->
									<div class="account link-inline">
										<div class="dropdown text-right">
											<a class="dropdown-toggle" data-toggle="dropdown">
											<span class="icon icon-person "></span>
											</a>
											<ul class="dropdown-menu dropdown-menu--xs-full">
												<li><a href="login_form.html"><span class="icon icon-person"></span>My Account</a></li>
												<li><a href="wishlist.html"><span class="icon icon-favorite_border"></span>My Wishlist</a></li>
												<li><a href="compare.html"><span class="icon icon-sort"></span>Compare</a></li>
												<li><a href="checkout-step.html"><span class="icon icon-done_all"></span>Checkout</a></li>
												<li><a href="#"  data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-lock"></span>Log In</a></li>
												<li><a href="login_form.html"><span class="icon icon-person_add"></span>Create an account</a></li>
												<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
											</ul>
										</div>
									</div>
<!-- GIOhang -->
									<!-- account menu end -->
									<!-- shopping cart start -->
									<div class="cart link-inline" >
										<div class="dropdown text-right">
											
											<a class="dropdown-toggle" href="">
											<span> <a href="{{asset('')}}shopping"><i style="font-size: 32px;color: blue" class="fas fa-shopping-cart"></i></a></span>
											<span class="badge badge--cart">{{$cart}}</span>
											</a>
											
										</div>
									</div>
									<!-- shopping cart end -->			
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<!-- End HEADER section -->
		<!-- Slider section --> 




		<section class="tada-container content-posts">
    
    
       		 @yield('content')
        
    	</section>

		<footer>
			<!-- footer-data -->
			<div class="container inset-bottom-60">
				<div class="row" >
					<div class="col-sm-12 col-md-5 col-lg-6 border-sep-right">
						<div class="footer-logo hidden-xs">
							<!--  Logo  --> 
							<a class="logo" href="{{asset('/')}}"> <img class="replace-2x" src="{{asset('shop_asset/images/manhha.png') }}"  alt="YOURStore"> </a> 
							<!-- /Logo --> 
						</div>
						<div class="box-about">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title visible-xs">ABOUT US</h4>
								<div class="mobile-collapse__content">
									<p> No more need to look for other ecommerce themes. We provide huge number of different layouts. Yourstore comes packed with free and useful features developed to make your website creation easier. Innovative clean design, advanced functionality, UI made for humans, extensive documenta- tion and support i continue this list infinitely... </p>
								</div>
							</div>
						</div>
						<!-- subscribe-box -->
						<div class="subscribe-box offset-top-20">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title">NEWSLETTER SIGNUP</h4>
								<div class="mobile-collapse__content">
									<form class="form-inline">
										<input class="subscribe-form__input" type="text" name="subscribe">
										<button type="submit" class="btn btn--ys btn--xl">SUBSCRIBE</button>
									</form>
								</div>
							</div>
						</div>
						<!-- /subscribe-box --> 
					</div>
					<div class="col-sm-12 col-md-7 col-lg-6 border-sep-left">
						<div class="row">
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">INFORMATION</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="about.html">About Us</a></li>
											<li><a href="support-24.html">Customer Service</a></li>
											<li><a href="faq.html">Privacy Policy</a></li>
											<li><a href="site-map.html">Site Map</a></li>
											<li><a href="typography.html">Search Terms</a></li>
											<li><a href="warranty.html">Advanced Search</a></li>
											<li><a href="delivery-page.html">Orders and Returns</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">WHY BUY FROM US</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="warranty.html">Shipping &amp; Returns</a></li>
											<li><a href="typography.html">Secure Shopping</a></li>
											<li><a href="about.html">International Shipping</a></li>
											<li><a href="delivery-page.html">Affiliates</a></li>
											<li><a href="support-24.html">Group Sales</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">MY ACCOUNT</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="login_form.html">Sign In</a></li>
											<li><a href="shopping_cart.html">View Cart</a></li>
											<li><a href="wishlist.html">My Wishlist</a></li>
											<li><a href="support-24.html">Track My Order</a></li>
											<li><a href="faq.html">Help</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-data --> 
			<div class="divider divider-md visible-xs visible-sm visible-md"></div>
			<!-- social-icon -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="social-links social-links--large">
							<ul>
								<li><a class="icon fa fa-facebook" href="http://www.facebook.com/"></a></li>
								<li><a class="icon fa fa-twitter" href="http://www.twitter.com/"></a></li>
								<li><a class="icon fa fa-google-plus" href="http://www.google.com/"></a></li>
								<li><a class="icon fa fa-instagram" href="https://instagram.com/"></a></li>
								<li><a class="icon fa fa-youtube-square" href="https://www.youtube.com/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /social-icon --> 
			<!-- footer-copyright -->
			<div class="container footer-copyright">
				<div class="row">
					<div class="col-lg-12"> <a href="index.html"><span>Mạnh Hà </span> STORE </a> Address : Số 97 Nguyễn Trãi, Thanh Xuân, Hà Nội - 0989876400  <a href="https://www.facebook.com/hahongmanh19971997">Liên Hệ</a> Email:  hahongmanh1971997@gmail.com</div>
				</div>
			</div>
			<!-- /footer-copyright --> 
			<a href="#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top <span class="icon icon-expand_less"></span></a> 
		</footer>
		<!-- END FOOTER section -->
		<div id="productQuickView" class="white-popup mfp-hide">
			<h1>Modal dialog</h1>
			<p>You won't be able to dismiss this by usual means (escape or
				click button), but you can close it programatically based on
				user choices or actions.
			</p>
		</div>
		<!-- <div id="compareSlide" class="hidden-xs">
			<div class="container">
				<div class="compareSlide__top">
					Compare
				</div>
				<a class="compareSlide__close icon icon-close">
				</a>
				<div class="compared-product-row">
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="{{asset('shop_asset/images/product/product-1.jpg') }}" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="{{asset('shop_asset/images/product/product-1.jpg') }}" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="{{asset('shop_asset/images/product/product-1.jpg') }}" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="{{asset('shop_asset/images/product/product-1.jpg') }}" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="{{asset('shop_asset/images/product/product-1.jpg') }}" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
					<div class="compared-product">
						<a href="#" class="compared-product__delete icon icon-delete"></a>
						<div class="compared-product__image"><a href="#"><img src="{{asset('shop_asset/images/product/product-1.jpg') }}" alt=""/></a></div>
						<a href="#" class="compared-product__name">Quis nostrud exercitation ullamco labori.</a>
					</div>
				</div>
				<div class="compareSlide__bot">
					<a href="#" class="clear-all icon icon-delete"><span>Clear All</span></a>
					<a href="#" class="btn btn--ys btn-compare"><span class="icon icon-shopping_basket"></span> Compare</a>
				</div>
			</div>
		</div> -->
		<!-- Button trigger modal -->
	  

		<!--================== modal ==================-->
		<!-- modalAddToCart -->

		<div class="modal  fade"  id="modalAddToCart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		      </div>
		      <div class="modal-body">
		        <div class="text-center">
		        	"Mauris lacinia lectus" added to cart successfully! 
		        </div>
		      </div>
		      <div class="modal-footer text-center">		       	
		        <a href="shopping-cart-right-column.html"  class="btn btn--ys btn--full btn--lg">go to cart</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- /modalAddToCart -->
		<!-- modalLoginForm-->
<!-- Modal đăng nhập -->
		<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		        <h4 class="modal-title text-center text-uppercase">Login form</h4>
		      </div>
		      <form>
			      <div class="modal-body indent-bot-none">
			      	<div class="form-group">
			      		<div class="input-group">
						    <span class="input-group-addon">
						    	<span class="icon icon-person"></span>
						    </span>
						    <input type="text" id="LoginFormName" class="form-control" placeholder="Name:">
						</div>
			      	</div>
					<div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon">@</span>
						    <input type="password" id="LoginFormPass" class="form-control" placeholder="Password:">
						</div>
					</div>			         				    				     
 	                 <div class="checkbox-group">
	                  <input type="checkbox" id="checkBox2">
	                  <label for="checkBox2"> 
	                  	<span class="check"></span>
	                  	<span class="box"></span>
	                  	Remember me
	                  </label>
	                </div>
	                <button type="button" class="btn btn--ys btn--full btn--lg">Login</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-blue"><span class="fa fa-facebook"></span> Login with Facebook</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-red"><span class="fa fa-google-plus"></span> Login with Google</button>
			        <div class="divider divider--xs"></div>
			        <ul class="list-arrow-right">
			        	<li><a href="#">Forgot your username?</a></li>
			        	<li><a href="#">Forgot your password?</a></li>
			        	<li><a href="#">Create an account</a></li>
			        </ul>
			      </div>			      
			  </form>
		    </div>
		  </div>
		</div>	
		<!-- /modalLoginForm-->

      <!-- Modal (quickViewModal) -->		
<!-- Modal ĐỔ San phâm khi click -->
		
		<!-- / Modal (quickViewModal) -->
		<!-- Modal (newsletter) -->		
		<div class="modal  modal--bg fade"  id="quickViewModal">
		  <div class="modal-dialog white-modal">
		    <div class="modal-content container">
		    	<div class="modal-header">
		       	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		     	 </div>
		    	<!--  -->
		    	<div class="product-popup">
					<div class="product-popup-content">
					<div class="container-fluid">
						<div class="row product-info-outer">
							<div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
								<div class="product-main-image">
									<div class="product-main-image__item"><img src='{{asset('shop_asset/images/product/product-big-1.jpg') }}' alt="" /></div>
								</div>
							</div>
							<div class="product-info col-xs-12 col-sm-7 col-md-6 col-lg-6">
								<div class="wrapper">
									<div class="product-info__sku pull-left">SKU: <strong>mtk012c</strong></div>
									<div class="product-info__availabilitu pull-right">Availability:   <strong class="color">In Stock</strong></div>
								</div>
								<div class="product-info__title">
									<h2>Lorem ipsum dolor sit ctetur</h2>
								</div>
								<div class="price-box product-info__price"><span class="price-box__new">$65.00</span> <span class="price-box__old">$84.00</span></div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="product-info__description">
									<div class="product-info__description__brand"><img src="{{asset('shop_asset/images/custom/brand.png') }}" alt=""> </div>
									<div class="product-info__description__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								</div>
								<div class="divider divider--xs product-info__divider"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">COLOR:</span>  Red + $10.00 *</div>
									<div class="pull-right required">* Required Fields</div>
								</div>
								<ul class="options-swatch options-swatch--color options-swatch--lg">
									<li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/oldlace.png') }}" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/dark-grey.png') }}" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/grey.png') }}" alt=""/></span></a></li>
									<li><a href="#"><span class="swatch-label"><img src="{{asset('shop_asset/images/colors/light-grey.png') }}" alt=""/></span></a></li>
								</ul>						
								<div class="wrapper">
									<div class="pull-left"><span class="option-label">SIZE:</span></div>
									<div class="pull-left required">*</div>
								</div>
								<ul class="options-swatch options-swatch--size options-swatch--lg">
									<li><a href="#">S</a></li>
									<li><a href="#">M</a></li>
									<li><a href="#">L</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">2XL</a></li>
									<li><a href="#">3XL</a></li>
								</ul>
								<div class="divider divider--sm"></div>
								<div class="wrapper">
									<div class="pull-left"><span class="qty-label">QTY:</span></div>
									<div class="pull-left"><input type="text" name="quantity" class="input--ys qty-input pull-left" value="1"></div>
									<div class="pull-left"><button type="submit" class="btn btn--ys btn--xxl"><span class="icon icon-shopping_basket"></span> Add to cart</button></div>
								</div>
								<ul class="product-link">
									<li class="text-right"><span class="icon icon-favorite_border  tooltip-link"></span><a href="#"><span class="text">Add to wishlist</span></a></li>
									<li class="text-left"><span class="icon icon-sort  tooltip-link"></span><a href="#"><span class="text">Add to compare</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
		    	<!-- / -->
		    </div>
		  </div>
		</div>
		<!-- / Modal (newsletter) -->
		<!--================== /modal ==================-->
		




		<!-- jQuery 1.10.1--> 
		<script src="{{asset('shop_asset/external/jquery/jquery-2.1.4.min.js') }}"></script> 
		<!-- Bootstrap 3--> 
		<script src="{{asset('shop_asset/external/bootstrap/bootstrap.min.js') }}"></script> 
		<!-- Specific Page External Plugins --> 

		<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="{{asset('shop_asset/external/slick/slick.min.js') }}"></script>
		<script src="{{asset('shop_asset/external/bootstrap-select/bootstrap-select.min.js') }}"></script>  
		<script src="{{asset('shop_asset/external/countdown/jquery.plugin.min.js') }}"></script> 
		<script src="{{asset('shop_asset/external/countdown/jquery.countdown.min.js') }}"></script>  		
		<script src="{{asset('shop_asset/external/instafeed/instafeed.min.js') }}"></script>  		
		<script src="{{asset('shop_asset/external/magnific-popup/jquery.magnific-popup.min.js') }}"></script>  		
		<script src="{{asset('shop_asset/external/isotope/isotope.pkgd.min.js') }}"></script> 
		<script src="{{asset('shop_asset/external/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{asset('shop_asset/external/colorbox/jquery.colorbox-min.js') }}"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="{{asset('shop_asset/external/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script> 
		<script type="text/javascript" src="{{asset('shop_asset/external/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script> 
		<!-- Custom --> 
		<script src="{{asset('shop_asset/js/custom.js') }}"></script>			
		<script src="{{asset('shop_asset/js/js-index-01.js') }}"></script>		
				
		<script>
		  jQuery.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
		    }
		  });
		</script>

		@yield('footer')
	</body>
</html>