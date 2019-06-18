<!DOCTYPE html>
<html>

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ asset('new/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('new/css/main.css') }}">
    <style type="text/css">
    	.nav-link{
		    font-size: 18px !important;
    	}
    </style>
</head>

<body>
	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{ url('/')}}"><img src="{{ asset('logo1.png') }}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.html"><i class="fa fa-tachometer" aria-hidden="true"></i> dashboard</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"><i class="fa fa-product-hunt" aria-hidden="true"></i> Products</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category.html">List</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product.html">Create</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"> <i class="fa fa-list-alt" aria-hidden="true"></i> Categories</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">List</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Create</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"><i class="fa fa-language" aria-hidden="true"></i> Languages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.html">English</a></li>
									<li class="nav-item"><a class="nav-link" href="tracking.html">Khmer</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"> <i class="fa fa-user"></i> username</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="login.html">logout</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<button class="search">
                                    <span class="fa fa-search lnr lnr-magnifier" id="search"></span>
                                </button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="fa fa-search lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
    <!-- End Header Area -->
    
    <!-- start banner Area -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
	  	<div class="row">
		    <div class="col-sm-12">
		      	<div class="row">	
					<div class="form-group col-sm-6 col-xs-6" >
	                    <div class="card">
	                        <div class="card-body" style="background-color:#f39c12;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        SADFF
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group col-sm-6 col-xs-6">
	                    <div class="card" style="width:100%">
	                        <div class="card-body" style="background-color:#328c4a;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        ASD                           
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
				</div>
		    </div>
	  	</div>
	</div>
	<div class="container">
	  	<div class="row">
		    <div class="col-sm-12">
		      	<div class="row">	
					<div class="form-group col-sm-6 col-xs-6" >
	                    <div class="card">
	                        <div class="card-body" style="background-color:#f39c12;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        SADFF
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group col-sm-6 col-xs-6">
	                    <div class="card" style="width:100%">
	                        <div class="card-body" style="background-color:#328c4a;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        ASD                           
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
				</div>
		    </div>
	  	</div>
	</div>
	<div class="container">
	  	<div class="row">
		    <div class="col-sm-12">
		      	<div class="row">	
					<div class="form-group col-sm-6 col-xs-6" >
	                    <div class="card">
	                        <div class="card-body" style="background-color:#f39c12;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        SADFF
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group col-sm-6 col-xs-6">
	                    <div class="card" style="width:100%">
	                        <div class="card-body" style="background-color:#328c4a;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        ASD                           
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
				</div>
		    </div>
	  	</div>
	</div>
	<div class="container">
	  	<div class="row">
		    <div class="col-sm-12">
		      	<div class="row">	
					<div class="form-group col-sm-6 col-xs-6" >
	                    <div class="card">
	                        <div class="card-body" style="background-color:#f39c12;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        SADFF
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group col-sm-6 col-xs-6">
	                    <div class="card" style="width:100%">
	                        <div class="card-body" style="background-color:#328c4a;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        ASD                           
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
				</div>
		    </div>
	  	</div>
	</div>
	<div class="container">
	  	<div class="row">
		    <div class="col-sm-12">
		      	<div class="row">	
					<div class="form-group col-sm-6 col-xs-6" >
	                    <div class="card">
	                        <div class="card-body" style="background-color:#f39c12;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        SADFF
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group col-sm-6 col-xs-6">
	                    <div class="card" style="width:100%">
	                        <div class="card-body" style="background-color:#328c4a;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        ASD                           
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
				</div>
		    </div>
	  	</div>
	</div>
	<div class="container">
	  	<div class="row">
		    <div class="col-sm-12">
		      	<div class="row">	
					<div class="form-group col-sm-6 col-xs-6" >
	                    <div class="card">
	                        <div class="card-body" style="background-color:#f39c12;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        SADFF
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group col-sm-6 col-xs-6">
	                    <div class="card" style="width:100%">
	                        <div class="card-body" style="background-color:#328c4a;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        ASD                           
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
				</div>
		    </div>
	  	</div>
	</div>
	<div class="container">
	  	<div class="row">
		    <div class="col-sm-12">
		      	<div class="row">	
					<div class="form-group col-sm-6 col-xs-6" >
	                    <div class="card">
	                        <div class="card-body" style="background-color:#f39c12;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        SADFF
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group col-sm-6 col-xs-6">
	                    <div class="card" style="width:100%">
	                        <div class="card-body" style="background-color:#328c4a;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        ASD                           
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
				</div>
		    </div>
	  	</div>
	</div>
	<div class="container">
	  	<div class="row">
		    <div class="col-sm-12">
		      	<div class="row">	
					<div class="form-group col-sm-6 col-xs-6" >
	                    <div class="card">
	                        <div class="card-body" style="background-color:#f39c12;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        SADFF
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-product-hunt" aria-hidden="true" style="font-size: 90px;"></i>
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('product.index' )}}#" class="btn btn-default">@lang('sample.more_info') 
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group col-sm-6 col-xs-6">
	                    <div class="card" style="width:100%">
	                        <div class="card-body" style="background-color:#328c4a;
	                            color:white;">
	                            <div class="row">
	                                <div class="col-sm-7 col-xs-7">
	                                    <center>
	                                        ASD                           
	                                    </center>
	                                </div>
	                                <div class="col-sm-5 col-xs-5">
	                                    <center>
	                                        <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 90px;"></i>   
	                                    </center>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="card-footer" style="background-color: #d0c8c854">
	                            <center>
	                                <a href="{{ route('category.index' )}}" class="btn btn-default">@lang('sample.more_info')
	                                <i class="fa fa-arrow-right"></i>
	                                </a>
	                                </a>
	                            </center>
	                        </div>
	                    </div>
	                </div>
				</div>
		    </div>
	  	</div>
	</div>
	<script src="{{asset('new/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('new/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('new/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('new/js/nouislider.min.js')}}"></script>
	<script src="{{asset('new/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('new/js/main.js')}}"></script>
</body>

</html>