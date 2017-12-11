  <li class="linkdown">
                        <a href="cart.php">
                            <i class="fa fa-shopping-basket mr-5">
                                <?php
                               // session_start();
                               // print_r($_SESSION['shopcart']);
                                if(!empty($_SESSION['shopcart'])){
                                echo count($_SESSION['shopcart']); 
                                }
                                ?>
                            </i>
                            <span class="hidden-xs">
                                Cart
                                
                            </span>    
                        </a>
                     
                    </li>