<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PaVaNa - Hiệu sách online cho mọi lứa tuổi</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body> 
    <header id="header"><!--header-->
        
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row" style="height: 100px">
                    <div class="col-sm-2">
                            <div class="logo pull-left col-sm-6">
                            <a href="{{URL::to('/trang-chu')}}"><img src="{{URL::to('public/banner/logo.png')}}" alt="" height="70px" width="90px" /></a>
                        </div>
                    </div>
                    <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                    <div class="col-sm-4" style="margin-top: 32px; margin-left: -41px; ">
                        
                        <div class="search_box pull-right">
                            <input type="text" style="color: #070808" name="keywords_submit" placeholder="Tìm kiếm các đầu sách"/>
                            
                        </div>
                    </div>
                    <div class="col-sm-2" style="margin-top: 22px; padding-left: 0px">
                        <input style="background-color: #1ba085" type="submit" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
                    </div>

                    </form>

                    <div class="col-sm-4" style="margin-top: 32px">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user"></i>Tài khoản</a></li>
                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <img src="{{URL::to('public/banner/1469_new.jpg')}}" alt="" style="max-width: 100%; height: auto; margin-left: -50px" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <img src="{{URL::to('public/banner/1455_new.jpg')}}"  alt="" style="max-width: 100%; height: auto; margin-left: -50px" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="row">
                                   <img src="{{URL::to('public/banner/1461_new.jpg')}}"  alt="" style="max-width: 100%; height: auto; margin-left: -50px" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($cate_product as $key => $cate)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-sp/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                            @endforeach 
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Tác giả</h2>
                            <div class="author-name">
                                <ul class="nav nav-pills nav-stacked">
                                @foreach($author as $key => $au)
                                    <li><a href="{{URL::to('/tac-gia/'.$au->author_id)}}" style="color: #696763"><span class="pull-right"></span>{{$au -> author_name}}</a></li>
                                @endforeach 
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>

            <div class="row" style="background-color: #A6CAEA; margin-top: 20px; padding-top: 20px;  margin-bottom: 30px; padding-left: 0px" >
                   
                        <h2 class="title">Bán chạy nhất</h2>
                                @foreach($banchay_product as $key => $bcn)
                                <a href="{{URL::to('/chi-tiet-san-pham/'.$bcn->product_id)}}">
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img  src="{{URL::to('public/uploads/product/'.$bcn->product_image)}}" alt="" / height="180" style="width: 70%;">
                                                    <h2>{{ $bcn->product_price }}</h2>
                                                    <div style="height: 50px"><p>{{ $bcn->product_name }}</p></div>
                                                    <form action="{{URL::to('/save-cart')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <span>
                                                            <input name="productid_hidden" type="hidden" value="{{$bcn->product_id}}"/>
                                                            <button type="submit" class="btn btn-fefault cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                Thêm vào giỏ hàng
                                                            </button>
                                                        </span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </a>
                                @endforeach
                        
                
            </div>

        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84 976 931 294</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> mailinh1352000@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                <p></p>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{asset{('public/frontend/js/main.js')}}"></script>
</body>
</html>