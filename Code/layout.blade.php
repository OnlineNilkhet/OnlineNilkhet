<!DOCTYPE html>
<html >
<head>
    <link rel="shortcut icon" href="{{URL::to('backend/img/favicon.ico')}}">
    <title>Home | Online Nilkhet</title>
     <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                          
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
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row"> 

                    <div class="col-sm-4">
                        <div class="companyinfo"> 
                        <div class="logo pull-left">
                             
                            <a href="{{URL::to('/')}}"><h2><span>O</span>nline Nilkhet 
                            </h2></a>
                            <div class="container">   
                </div>
            </div>                   
         </div>                  
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                            <?php $customer_id=Session::get('customer_id');
                                 $shipping_id=Session::get('shipping_id');
                                // print_r($customer_id);
                                 // print_r($shipping_id);
                    ?>


                         <?php if($customer_id != NUll ) {?>
                                <li><a href="{{URL::to('/customer-dashboard')}}"><i class="fa fa-crosshairs"></i>Account</a></li>

                            <?php }else{?>
                                 <li><a href="{{URL::to('/login-check')}}"></i>Account</a></li>
                             <?php }?>


                        


                         <?php if($customer_id != NUll && $shipping_id==NULL) {?>
                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <?php }elseif($customer_id != NUll && $shipping_id!=NULL){?>
                                <li><a href="{{URL::to('/payment')}}"></i> Checkout</a></li>
                            <?php }else{?>
                                 <li><a href="{{URL::to('/login-check')}}"></i> Checkout</a></li>
                             <?php }?>

                                
                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart({{Cart::count()}})</a></li>

                                <?php $customer_id=Session::get('customer_id'); ?>
                                <?php if($customer_id != Null) {?>

                               

                            <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user">
                                    
                                </i>{{ Session::get('customer_name')}}

                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                  
                            <li><a href="{{URL::to('/customer-logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>


                            <?php } else{?>
                                 <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
                             <?php } ?>

                         


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
                                <span class="sr-only"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                     <div class="mainmenu pull-left">
                         <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{URL::to('/')}}" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="#">Books</a></li>
                                        
                    <?php $customer_id=Session::get('customer_id'); ?>
                     <?php if($customer_id != Null) {?>
                            <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                     <?php } else{?>
                            <li><a href="{{URL::to('/login-check')}}">Checkout</a></li>
                    <?php } ?>       
                            <li><a href="{{URL::to('/show-cart')}}">Cart</a></li>       
                                </ul>
                            </li> 
                            <li><a href="#">Contact</a></li>
                              <li><a href="{{URL::to('/suggestion')}}">Suggestion</a></li>
                            </ul>

                        </div>

                    </div>
                    
                <div class="col-sm-3">
                <div class="search_box pull-right">
                    <form action='{{url('/search')}}' method="post">
                        <input type="text" placeholder="Search" name="search_data" id="proList"/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
    </header><!--/header-->
    
   <?php 
    $all_published_slider=DB::table('tb1_slider')
    ->where('publication_status',1)
    ->get(); 

?>  
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
                                <?php 
                                $all_published_slider=DB::table('tb1_slider')
                                            ->where('publication_status',1)
                                            ->get();
                                $i=1;
                                foreach ($all_published_slider as $v_slider) {
                                            if($i==1){

                                            ?>
                            <div class="item active">
                            <?php } else {?>
                            <div class="item">
                            <?php } ?>
                                <div class="col-sm-8">
                                    <h1><span>New Arrival</span></h1>
                                    <button  type="button" class="btn btn-default get">
                                        <a href="{{URL::to('/')}}">Get it now</button></a>
                                </div>
                                <div class="col-sm-4">
                                    <img src="{{URL::to($v_slider->slider_image)}}"  style="height: 250px; width: 200px;"  class="girl img-responsive" alt="" />
                                  
                                </div>
                            </div>
                            <?php $i++; } ?>
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
    <!--yield ('slider')-->
)
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category--->
                            <div class="panel panel-default">
                             <?php
                                $all_publisher_category=DB::table('tb1_category')
                                        ->where('publication_status',1)
                                        ->get();
                                foreach($all_publisher_category as $v_category){?>
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>
                                </div>
                            </div>
                         <?php } ?> 

                     </div>
                            
                        </div><!--/category-->
                    
                        <div class="brands_products">
                            <h2>Vendors</h2>
                            <div class="brands-name">
                               <ul class="nav nav-pills nav-stacked" >
                                     <?php
                                $all_vendor=DB::table('tb1_vendor')                                               
                                        ->get();
                            foreach($all_vendor as $v_vendor){?>

                            <li><a href="{{URL::to('/product_by_vendor/'.$v_vendor->vendor_id)}}">{{$v_vendor->vendor_name}}</a></li>
                            <?php } ?>  
                                </ul>
                            </div>
                        </div>
                        
                      
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
      
                  @yield('content')
                    
                </div>
            </div>
        </div>
    </section>
   
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="companyinfo">
                            <h2><span>O</span>nline Nilkhet 
                            </h2>
                    </div>

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">All type of Books</a></li>
                            
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Online Nilkhet</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Online Nilkhet</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2018 Online Nilkhet. All rights reserved.</p>
                   
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

   
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>