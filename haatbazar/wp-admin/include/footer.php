</div>
        
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
        <script type="text/javascript">
      /*    $(document).ready(function(){
                   $("#productbtn").click(function(){
                    var form_data = new FormData();
                        var productname=$("#productname").val();
                       // var picture=$("#picture").val();
                        var price=$("#price").val();
                        var cprice=$("#cprice").val();
                        var details=$('textarea#details').val();
                         var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("picture").files[0]);
  var f = document.getElementById("picture").files[0];
  
 form_data.append("file", document.getElementById('picture').files[0]);
  var fsize = f.size||f.fileSize;
  if(fsize >  2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {

                       // alert(details);
                         var senddata='productname='+productname+'&picture='+form_data+'&price='+price+'&cprice='+cprice+'&details='+details;
                       /// alert();
                        if(productname==''|| picture=='' || price=='' || cprice==''){
                            alert('not valid');
                        }
                        else{
                            $.ajax({
                                type:"POST",
                                url:"Class/sendproduct.php",
                                data:senddata,
                                 contentType: false,
                                cache:false,//send the file fresh not the cached
                                success:function(result){
                                    alert(result);
                                }

                            });//Ajax closed
                        }

                
 

   }     
    });    
         
    });

*/
        </script>

    </body>
</html>