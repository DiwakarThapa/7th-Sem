<?php

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
                    Basic Table
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
                                <th>Sizes</th>
                                <th>Prices</th>
                                <th>Quantities</th>
                                <th>Discounts</th>
                                <th>Thumbnails</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                                                                    <tr>
                                <td>1</td>
                                <td>Shaeleigh</td>
                                <td>Women</td>
                                <td>Small</td>
                                <td>893000</td>
                                <td>195</td>
                                <td>8</td>
                                <td><img src="http://127.0.0.1:8000/images/Thumbnails/20171128064358-fLdLAD.jpg" width="50"></td>
                                <td>
                                    <form action="http://127.0.0.1:8000/admin/product-status" method="post">
                                        <input type="hidden" name="_token" value="q5En2IJEvspiYSpX2ERJRuD1vrw4Ahz9eeqbRIAn">
                                        <input type="hidden" name="_prid" value="1">
                                                                                    <button class="btn btn-danger btn-sm" name="disable">Delete</button>
                                                                            </form>
                                </td>
                                <td><a class="btn btn-danger btn-sm" href="http://127.0.0.1:8000/admin/edit-product/1">Edit</a></td>
                            </tr>
                            </tbody>
                                                        <tr>
                                <td>2</td>
                                <td>New Noble Wood</td>
                                <td>Men</td>
                                <td>Medium</td>
                                <td>500</td>
                                <td>60</td>
                                <td>68</td>
                                <td><img src="http://127.0.0.1:8000/images/Thumbnails/20171128064141-NcaxPF.jpg" width="50"></td>
                                <td>
                                    <form action="http://127.0.0.1:8000/admin/product-status" method="post">
                                        <input type="hidden" name="_token" value="q5En2IJEvspiYSpX2ERJRuD1vrw4Ahz9eeqbRIAn">
                                        <input type="hidden" name="_prid" value="2">
                                                                                    <button class="btn btn-danger btn-sm" name="disable">Delete</button>
                                                                            </form>
                                </td>
                                <td><a class="btn btn-danger btn-sm" href="http://127.0.0.1:8000/admin/edit-product/2">Edit</a></td>
                            </tr>
                            </tbody>
                                                        <tr>
                                <td>3</td>
                                <td>New Noble Wood</td>
                                <td>Men</td>
                                <td>Large</td>
                                <td>400</td>
                                <td>30</td>
                                <td>68</td>
                                <td><img src="http://127.0.0.1:8000/images/Thumbnails/20171128064141-NcaxPF.jpg" width="50"></td>
                                <td>
                                    <form action="http://127.0.0.1:8000/admin/product-status" method="post">
                                        <input type="hidden" name="_token" value="q5En2IJEvspiYSpX2ERJRuD1vrw4Ahz9eeqbRIAn">
                                        <input type="hidden" name="_prid" value="3">
                                                                                    <button class="btn btn-danger btn-sm" name="disable">Delete</button>
                                                                            </form>
                                </td>
                                <td><a class="btn btn-danger btn-sm" href="http://127.0.0.1:8000/admin/edit-product/3">Edit</a></td>
                            </tr>
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
    