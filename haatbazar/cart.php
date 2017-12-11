<?php 
session_start();

if(isset($_POST['add_to_cart'])){
    $GLOBALS['id']=$_GET['id'];
	if (isset($_SESSION['shopcart'])) {
		$item_array_id=array_column($_SESSION['shopcart'],"iditem");
		if(!in_array($_GET['id'],$item_array_id)){
			$count=count($_SESSION['shopcart']);
			
			$itemlist=array('iditem'=>$_GET['id'],'itemname'=>$_POST['hidden_name'],'itemprice'=>$_POST['hidden_price'],'itemquantity'=>$_POST['quantity']);
	
			$_SESSION['shopcart'][$count]=$itemlist;
						
	

		}else{
			echo "<script>alert('inserted early')</script>";
		}

	} else {
		$itemlist=array('iditem'=>$_GET['id'],'itemname'=>$_POST['hidden_name'],'itemprice'=>$_POST['hidden_price'],'itemquantity'=>$_POST['quantity']);
		$_SESSION['shopcart'][0]=$itemlist;
		}
		
}
/*if(isset($_GET['action'])){
	if($_GET['action']=="delete"){
		foreach ($_SESSION['shopcart'] as $key => $value) {
			if($value["iditem"]==$GLOBALS['id']){
				unset($_SESSION["shopcart"][$key]);
				echo "<script>window.location='http://localhost/7th-sem/haatbazar/index.php'</script>";

			}
		}
	}
}*/
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
                    
                
                 <?php require_once("cart/cartsession.php");?>
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
                        <li ><a href="index.php"  >Home</a>
                            
                        </li><!-- end li dropdown -->    
                        <!-- Features -->
                        
                       
                        <li><a href="elements.html">About</a></li>
                        
                        
                    </ul><!-- end navbar-nav -->
                   
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </div><!-- end navbar -->
        
        
        
        
 
        <div class="col-sm-12 text-center">
        <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
           <td class="image"><strong>ITEM</strong></td>
           <td class="description"><strong>DETAILS</strong></td>
            <td class="description"><strong>Quantity</strong></td>
           <td class="total"><strong>PRICE</strong></td>
           <td class="total"><strong>TOTAL</strong></td>
          <td class="total"><strong>Cart Remove</strong></td>
            
           <td></td>
                        </tr>
                    </thead>
                    <tbody>    
                    	<?php 
                    	if(!empty($_SESSION['shopcart'])){
                    		$total=0;
                    	
                    		foreach ($_SESSION['shopcart'] as $key => $value) {
                    	                    	
                    	?>
                    <tr>
                    	<td><?php echo $value['iditem'];?></td>
                    	<td><?php echo $value['itemname'];?></td>
                    	<td><?php echo $value['itemquantity'];?></td>
                    	<td><?php echo $value['itemprice'];?></td>
                    	<td>Rs.<?php echo $value['itemprice']*$value['itemquantity'];?></td>
                    	<td><?php $total=$total+$value['itemprice']*$value['itemquantity'];?></td>
                    	<td><a href="cart.php?action=delete&id=<?php echo $value['iditem'];?>"><button type="button" class="close" aria-label="Close">
  							<span aria-hidden="true">&times;</span>
							</button></a></td>
                    </tr>

                    <?php }
                    
                    echo "<tr>
                    	<td colspan='6'>"."Total Price"."</td>"."<td>Rs.".$total."</td>
                    	
                    </tr>";
                                    	}?>
                    </tbody>
                </table>
            </div>
        </div>
            <br><br><br><br><br><br><br><br>
    <section id="do_action">
                <div class="container" align="center">
                <a class="btn btn-default check_out " style="font-size:20px; padding:10px" href="index.php">Continue Shopping</a>   
            <a class="btn btn-default check_out " style="font-size:20px; padding:10px"  href="form.php">Continue to Payment</a>
          <!---  <a class="btn btn-default check_out " style="font-size:20px; padding:10px"  href="cart.php?action=delete">Cancel Shopping</a> -->          
        </div>
    </section><!--/#do_action-->
        <br><br><br>
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