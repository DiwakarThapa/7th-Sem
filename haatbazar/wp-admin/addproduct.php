<?php

include('include/header.php');

include('include/navbar.php');
?>

        
            <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
            <div class="container-fluid">
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel panel-default">
    <div class="panel-heading" style="background-color:#c4e17f">
    <h1><span class="glyphicon glyphicon-tag"></span> Product / Add Product  </h1></div><br>
    <div class="panel-body" style="background-color:#E6EEEE;">
        <div class="col-lg-7">
        <div class="well">
        <form action="class/sendproduct.php" method="post" name="form" enctype="multipart/form-data">
        <p>Title</p>
        <input class="input-lg thumbnail form-control" type="text" name="productname" id="productname" autofocus style="width:100%" placeholder="Product Name" required>
<p>Category</p>
<select name="category">
    <option value="cloths">Clothes</option>
    <option value="bags">Bags</option>
    <option value="shoes">Shoes</option>
    <option value="household">Household</option>
    <option value="technology">Technology</option>
</select>

<p>Description</p>

<textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="write here..." required></textarea>
<p>Add Image</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
</div>
</div>
<div class="well">
<h3>Pricing</h3>
<p>Price</p>
<div class="input-group">
      <div class="input-group-addon">Rs</div>
      <input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
    </div><br>
<p>Compare at price</p>
<div class="input-group">
      <div class="input-group-addon">Rs</div>
      <input type="text" name="cprice" id="cprice" class="form-control" placeholder="0.00">
    </div>
    </div>
        </div>  
        <div class="col-lg-5">
        <div class="well">


<div align="center">
    <button type="reset" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px""> Add Product</button>
    </div>
        </form>
 
    </div>
</div></div></div>
    <!-- /#page-wrapper -->

   
        </div>
    <!-- /#wrapper -->

<?php

 include('include/footer.php');
?>
    