<?php
require_once('wp-admin/Class/class.php'); 
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>HaatBazar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!--Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    
    <!-- css files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/swiper.css" />
    
    
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/default.css" />
    
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    
</head>
    <body>
        
        <!-- start topBar -->
        <div class="topBar inverse">
            <div class="container">
                <ul class="list-inline pull-left hidden-sm hidden-xs">
                    <li><span class="text-primary">Have a question?</span> Call +123 4567 8910</li>
                </ul>
                
                <ul class="topBarNav pull-right">
                    
                
                   <?php session_start();require_once("cart/cartsession.php");?>
                </ul>
            </div><!-- end container -->
        </div>
        <!-- end topBar -->
        
        <div class="middleBar">
            <div class="container">
                <div class="row display-table">
                    <div class="col-sm-3 vertical-align text-left hidden-xs">
                        <a href="index.php">
                            <img width="160" src="img/logo-big.png" alt="" />
                        </a>
                    </div><!-- end col -->
                    <div class="col-sm-7 vertical-align text-center">
                        <form>
                            <div class="row grid-space-1">
                                <div class="col-sm-6">
                                    <input type="text" name="keyword" class="form-control input-lg" placeholder="Search">
                                </div><!-- end col -->
                                <div class="col-sm-3">
                                    <select class="form-control input-lg" name="category">
                                        <option value="all">All Categories</option>
                                        
                                        <option value="Clothes">Clothes</option>
                                        <option value="Bags">Bags</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Technology">Technology</option>
                                        
                                    </select>
                                </div><!-- end col -->
                                <div class="col-sm-3">
                                    <input type="submit"  class="btn btn-default btn-block btn-lg" value="Search">
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end col -->
                    <div class="col-sm-2 vertical-align header-items hidden-xs">
                        
                        
                    </div><!-- end col -->
                </div><!-- end  row -->
            </div><!-- end container -->
        </div><!-- end middleBar -->
        
        <!-- start navbar -->
        <div class="navbar yamm navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-3" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="javascript:void(0);" class="navbar-brand visible-xs">
                        <img src="img/logo.png" alt="logo">
                    </a>
                </div>
                <div id="navbar-collapse-3" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- Home -->
                        <li class="active"><a href="index.html"  >Home</a>
                            
                        </li><!-- end li dropdown -->    
                        <!-- Features -->
                        
                       
                        <li><a href="elements.html">About</a></li>
                        
                        
                    </ul><!-- end navbar-nav -->
                   
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </div><!-- end navbar -->
        
        <!-- start section -->
        <section class="section light-backgorund">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="navbar-vertical">
                            <ul class="nav nav-stacked">
                                <li class="header">
                                    <h6 class="text-uppercase">Categories <i class="fa fa-navicon pull-right"></i></h6>
                                </li>
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                      Clothes <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Mens</a></li>
                                        <li><a href="javascript:void(0);">Womens</a></li>
                                        <li><a href="javascript:void(0);">Kids</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                      Bags <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Mens</a></li>
                                        <li><a href="javascript:void(0);">Womens</a></li>
                                        <li><a href="javascript:void(0);">Kids</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                      Shoes <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Mens</a></li>
                                        <li><a href="javascript:void(0);">Womens</a></li>
                                        <li><a href="javascript:void(0);">Kids</a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="javascript:void(0);">HouseHolds</a></li>
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">
                                        Technology <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">PC</a></li>
                                        <li><a href="javascript:void(0);">Laptops</a></li>
                                        <li><a href="javascript:void(0);">Television</a></li>
                                        <li><a href="javascript:void(0);">Camera</a></li>                                       
                                        <li><a href="javascript:void(0);">Mobile</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- end navbar-vertical -->
                        
                        <hr class="spacer-20 no-border">
                        
                        <div class="widget hidden-xs">
                            <h6 class="subtitle text-uppercase"> Featured Products</h6>
                            
                            <ul class="items">
                                <li> 
                                    <a href="shop-single-product-v1.html" class="product-image">
                                        <img src="img/products/men_01.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <p class="product-name"> 
                                            <a href="shop-single-product-v1.html">Printed Summer Dress</a> 
                                        </p>
                                        <span class="price text-primary">Rs.1999</span>
                                        <div class="rate text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </li><!-- end item -->
                                <li> 
                                    <a href="shop-single-product-v1.html" class="product-image">
                                        <img src="img/products/women_02.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <p class="product-name"> 
                                            <a href="shop-single-product-v1.html">Printed Summer Dress</a> 
                                        </p>
                                        <span class="price text-primary">Rs.2999</span>
                                        <div class="rate text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </li><!-- end item -->
                                <li> 
                                    <a href="shop-single-product-v1.html" class="product-image">
                                        <img src="img/products/bags_06.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <p class="product-name"> 
                                            <a href="shop-single-product-v1.html">Printed Summer Dress</a> 
                                        </p>
                                        <span class="price text-primary">Rs.1599</span>
                                        <div class="rate text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </li><!-- end item -->
                                <li> 
                                    <a href="shop-single-product-v1.html" class="product-image">
                                        <img src="img/products/bags_01.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <p class="product-name"> 
                                            <a href="shop-single-product-v1.html">Printed Summer Dress</a> 
                                        </p>
                                        <span class="price text-primary">Rs.4599</span>
                                        <div class="rate text-warning">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </li><!-- end item -->
                            
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->
                    <div class="col-sm-8 col-md-9">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="owl-carousel slider owl-theme">
                                    <div class="item">
                                        <figure>
                                            <a href="javascript:void(0);">
                                                <img src="img/slider/slider_10.jpg" alt=""/>
                                            </a>
                                        </figure>
                                    </div><!-- end item -->
                                    <div class="item">
                                        <figure>
                                            <a href="javascript:void(0);">
                                                <img src="img/slider/slider_09.jpg" alt=""/>
                                            </a>
                                        </figure>
                                    </div><!-- end item -->
                                    <div class="item">
                                        <figure>
                                            <a href="javascript:void(0);">
                                                <img src="img/slider/slider_08.jpg" alt=""/>
                                            </a>
                                        </figure>
                                    </div><!-- end item -->
                                </div><!-- end owl carousel -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        
                        <hr class="spacer-20 no-border">
                        
                        <div class="col-sm-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs style1" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#featured" aria-controls="featured" role="tab" data-toggle="tab"><h6 class="text-uppercase">New Products</h6></a>
                            </li>
                          
                        </ul><!-- nav-tabs -->

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="featured">
                                <?php
                                   $showobj=new PdoConnection();
                               $row=$showobj->showproduct();
                                ?>
                                <div class="row column-4">
                               <?php
                                foreach($row as $v){
                                ?>
                          
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail store style1">
                                            <div class="header">
                                                <div class="badges">
                                                    
                                                </div>
                                                <figure class="layer">
                                                    <a href="javascript:void(0);">
                                                        <img src="wp-admin/images/<?php echo $v['category'];?>/<?php echo $v['filename'];?>" alt="">
                                                    </a>
                                                </figure>
                                                
                                            </div>
                                            <div class="caption">
                                                <h6 class="regular"><a href="#"><?php echo $v['productname'];?></a></h6>
                                               <form method="post" action="cart.php?action=add&id=<?php echo $v['pid'];  ?>">  
                      
                                                <div class="price">
                                                    <small class="amount off">Rs.<?php echo  $v['price'];?></small>
                                                    <span class="amount text-primary">Rs.<?php echo  $v['cprice'];?></span>
                                                    <input type="hidden" name="hidden_name" value="<?php echo $v['productname'];?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $v["price"];?>" />  
                           </div>  <h6 class="regular">Quantity</h6>
                                                 <input type="text" name="quantity" class="form-control" value="1" />   
                                                 <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /> 
                                            </form>
                                            </div><!-- end caption -->
                                        </div><!-- end thumbnail -->
                                    </div><!-- end col -->
                                  <?php }?>
                          
                                </div><!-- end tab content -->
                            <?php //}?>
                            </div><!-- end col -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="section white-background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs style1" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#featured" aria-controls="featured" role="tab" data-toggle="tab"><h6 class="text-uppercase">Products</h6></a>
                            </li>
                          
                        </ul><!-- nav-tabs -->

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="featured">
                                <?php
                                   $showobj=new PdoConnection();
                               $row=$showobj->showproduct();
                                ?>
                                <div class="row column-4">
                               <?php
                                foreach($row as $v){
                                ?>
                          
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail store style1">
                                            <div class="header">
                                                <div class="badges">
                                                    
                                                </div>
                                                <figure class="layer">
                                                    <a href="javascript:void(0);">
                                                        <img src="wp-admin/images/<?php echo $v['category'];?>/<?php echo $v['filename'];?>" alt="">
                                                    </a>
                                                </figure>
                                                
                                            </div>
                                            <div class="caption">
                                                <h6 class="regular"><a href="#"><?php echo $v['productname'];?></a></h6>
                                               <form method="post" action="cart.php?action=add&id=<?php echo $v['pid'];  ?>">  
                      
                                                <div class="price">
                                                    <small class="amount off"><?php echo $v['price'];?></small>
                                                    <span class="amount text-primary"><?php echo $v['cprice'];?></span>
                                                    <input type="hidden" name="hidden_name" value="<?php echo $v['productname'];?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $v["price"];?>" />  
                           </div>  <h6 class="regular">Quantity</h6>
                                                 <input type="text" name="quantity" class="form-control" value="1" />   
                                                 <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" /> 
                                            </form>
                                            </div><!-- end caption -->
                                        </div><!-- end thumbnail -->
                                    </div><!-- end col -->
                                  <?php }?>
                          
                                </div><!-- end tab content -->
                            <?php //}?>
                            </div><!-- end col -->
                        </div><!-- end row -->
                
                <hr class="spacer-10 no-border"/>
                
             
            </div><!-- end container -->
        </section>
        <!-- end section -->
        
        
 
        
      
        
        <!-- start footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    
                 
                    <div class="col-sm-3">
                        <h5 class="title">Information</h5>
                        <ul class="list alt-list">
                            <li><a href="about-us-v1.html"><i class="fa fa-angle-right"></i>About Us</a></li>
                            <li><a href="faq.html"><i class="fa fa-angle-right"></i>FAQ</a></li>
                            <li><a href="privacy-policy.html"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                            <li><a href="contact-v1.html"><i class="fa fa-angle-right"></i>Contact Us</a></li>
                        </ul>
                    </div><!-- end col -->
                   
                </div><!-- end row -->
                
                <hr class="spacer-30">
                
                <div class="row text-center">
                    <div class="col-sm-12">
                        <p class="text-sm">&COPY; 2017. Made  by <a href="javascript:void(0);">Cloudouse.</a></p>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer>
        <!-- end footer -->
        
        
        <!-- JavaScript Files -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.downCount.js"></script>
        <script type="text/javascript" src="js/nouislider.min.js"></script>
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/pace.min.js"></script>
        <script type="text/javascript" src="js/star-rating.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript" src="js/gmaps.js"></script>
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
     
    </body>


</html>