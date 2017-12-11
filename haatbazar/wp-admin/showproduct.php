<?php
session_start();
require_once('Class/class.php');
include('include/header.php');

include('include/navbar.php');
?>

        
          <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Show-Products</h1>
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
                                <th>Name</th>
                                <th>Category</th>
                                <th>Prices</th>
                                <th>Thumbnails</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $db=new PdoConnection();
                                
                                $row=$db->showproduct();
                                $i=1;
                                foreach ($row as $val) {
                                    
                                ?>
                                                                                    <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $val['productname'];?></td>
                                <td><?php echo $val['category'];?></td>
                                <td><?php echo $val['price'];?></td>
                                <td><img src="wp-admin/images/<?php echo $v['category'];?>/<?php echo $v['filename'];?>" width="50" height="50"></td>
                                <td><a href="delete.php?id=<?php echo $val['pid'];?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                            </tr>
                            <?php $i++;}?>
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
    