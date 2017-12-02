<?php
require_once('Class/class.php');
include('include/header.php');

include('include/navbar.php');
?>

        
          <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Orders</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>


        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Customer Name</th>
                                <th>Customer Contact Number</th>
                                <th>Customer Address</th>
                                <th>Email</th>
                                <th>Customer Place</th>
                                 <th>Product Name</th>
                                  <th>Product Quantity</th>
                                   <th>Product Price</th>
                                   <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $db=new PdoConnection();
                                
                                $row=$db->showorderproduct();
                                $i=1;
                                $total=0;
                                foreach ($row as $val) {
                                    
                                ?>
                                                                                    <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $val['cname'];?></td>
                                <td><?php echo $val['ccantact'];?></td>
                                <td><?php echo $val['caddress'];?></td>
                                <td><?php echo $val['cemail'];?></td>
                                <td><?php echo $val['cplace'];?></td>
                                <td><?php echo $val['productname'];?></td>
                                <td><?php echo $val['productquantity'];?></td>
                                <td><?php echo $val['productprice'];?></td>
                                <td>Rs.<?php echo $val['productprice']*$val['productquantity'];?></td>
                                
                                                            
                                                            </tr>

                            <?php $i++;$total=$total+($val['productprice']*$val['productquantity']);}

                            ?>
                            <tr>
                                <td colspan="8">Total Price</td>
                                <td>Rs.<?php echo $total;?></td>
                            </tr>
                            </tbody>
                                               
                            
                            </tbody>
                                                                                </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->



        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->


        </div>
    <!-- /#wrapper -->


<?php

 include('include/footer.php');
?>
    