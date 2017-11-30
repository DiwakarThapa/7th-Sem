<?php

include('include/header.php');

include('include/navbar.php');
?>

        
            <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add-Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                                <form action="http://127.0.0.1:8000/admin/add-products" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="q5En2IJEvspiYSpX2ERJRuD1vrw4Ahz9eeqbRIAn">
                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="name" class="control-label">Product Name</label>
                            </div>
                            <div class="col-sm-9 form-group">
                                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Product Name" tabindex="1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="discount" class="control-label">Parent Category</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select name="parent_cat_id" id="parent_cat_id" class="form-control input-lg" tabindex="2">
                                        <option value="" disabled selected>Select Parent Category</option>
                                                                                    <option value="cloth">Cloth</option>
                                                                                    <option value="bags">Bags</option>
                                                                                     <option value="shoes">Shoes</option>
                                                                                    <option value="household">Household</option>
                                                                                     <option value="techonology">Technology</option>
                                                                                    
                                                                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="discount" class="control-label">Sub-Category</label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select name="category_id" id="category_id" class="form-control input-lg" tabindex="2">
                                        <option value="male">Male</option>
                                           <option value="female">Female</option>
                                              <option value="kid">Kids</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="frontImage" class="control-label">Front Image</label>
                            </div>
                            <div class="col-sm-9 form-group">
                                <input type="file" name="frontImage" class="form-control input-lg">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="backImage" class="control-label">Back Image</label>
                            </div>
                            <div class="col-sm-9 form-group">
                                <input type="file" name="backImage" class="form-control input-lg">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="backImage" class="control-label">Quantity</label>
                            </div>
                            <div class="col-sm-9 form-group">
                                <input type="number" name="quantity" class="form-control input-lg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="price" class="control-label">Product Price</label>
                            </div>
                            <div class="col-sm-9 form-group">
                                <input type="number" name="price" class="form-control input-lg">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="discount" class="control-label">Product Size</label>
                            </div>
                            <div class="col-sm-9">
                                <select name="size" class="form-control input-lg">
                                    <option disabled selected>Select Size of Product</option>
                                    <option value="Small">Small</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                    <option value="Extra Large">Extra Large</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="col-sm-3 input-title">
                                <label for="discount" class="control-label">Product Discount</label>
                            </div>
                            <div class="col-sm-9 form-group">
                                <input type="number" name="discount" class="form-control input-lg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <textarea name="details" id="details" class="form-control input-lg" cols="60" rows="10" placeholder="Enter Details of the product"></textarea>
                            </div>
                        </div>
                    </div>


                    <hr class="colorgraph">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <input type="submit" class="btn btn-success btn-block btn-lg" class="" value="Add Product"></div>
                    </div>
                </form>
            </div>
        </div>

        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->



        </div>
    <!-- /#wrapper -->

<?php

 include('include/footer.php');
?>
    