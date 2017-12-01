<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HaatBazar Login &amp; Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

      

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>HaatBazar</strong> Login &amp; Register Forms</h1>
                            <div class="description">
                            	<p>
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to HaatBazzar drashboard</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		 <span id="ack"></span>
                                      
                                    </div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <div id="submitform1">
				                        <div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
				                        	<input type="text"  placeholder="Email..." class="form-username form-control" id="email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" placeholder="Password..." class="form-password form-control" id="password">
				                        </div>
				                        <input type="submit" class="btn" value="Sign in!" id="signinbtn">
                                       
				                    </div>
                                    
			                    </div>
		                    </div>
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                <!--    <form role="form" action="" method="post" class="registration-form">
				                    -->
                                    <div id="submitform">
                                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input 
                                            type="text" 
                                            name="form-first-name" 
                                            placeholder="First name..." 
                                            class="form-first-name form-control" 
                                            id="firstname"  
                                            pattern="^[A-Z][-a-zA-Z]+$" 
                                            title="name should be character and First letter Caps" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input 
                                            type="text"
                                             name="form-last-name" 
                                             placeholder="Last name..." 
                                             class="form-last-name form-control" 
                                             id="lastname" 
                                             pattern="^[A-Z][-a-zA-Z]+$" 
                                             title="name should be character and First letter Caps" required>
				                        </div>
                                         <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Password</label>
                                            <input 
                                            type="password" 
                                            name="form-last-name"
                                             placeholder="password..."
                                              class="form-last-name form-control" 
                                              id="password1" 
                                              pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$" 
                                              title="Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit." required>
                                        </div>
                                           
                                           <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input 
                                            type="text" 
                                            name="form-email" 
                                            placeholder="Email..." 
                                            class="form-email form-control" 
                                            id="email1" 
                                            required>
				                        </div>
				                        <input type="submit" class="btn" id="submitbtn" value="Sign me up!">
				                    <!--</form>-->
                                </div>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p> <a href="#" target="_blank"><strong></strong></a> 
        				<i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                   $("#submitbtn").click(function(){
                        var firstname=$("#firstname").val();
                        var lastname=$("#lastname").val();
                        var email=$("#email1").val();
                        var password=$("#password1").val();
                        var datastring='firstname='+firstname+'&lastname='+lastname+'&email='+email+'&password='+password;
                       /// alert();
                        if(firstname==''|| email==''){
                            alert('not valid');
                        }
                        else{
                            $.ajax({
                                type:"GET",
                                url:"Class/formreg.php",
                                data:datastring,
                                cache:false,//send the file fresh not the cached
                                success:function(result){
                                    alert(result);
                                }

                            });//Ajax closed
                        }

                   });
 $("#signinbtn").click(function(){
                if($("uemail").val()==" " && $("upassword").val()==" "){
                    alert();
                        $("#ack").html("<p style='color:red;'>please enter both username and password</p>");
                    }else{
                    var email=$("#email").val();
                    var password=$("#password").val();
                    var datast="email="+email+"&pw="+password;
                    $.ajax({
                        type:"POST",
                        url:"Class/adminlogin.php",
                        data:datast,
                        cache:false,
                        success:function(result){
                            if(result==1){
                                
                                window.location.href="http://localhost/7th-sem/haatbazar/wp-admin/"+"blank.php";
                            }else{
                                alert("no correct passowrd or email");
                            }
                        }
                    });
                   
                    }
                    });

            
         
    });
           

        </script>
        
   

    </body>

</html>