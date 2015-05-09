<?php
    include("login.php");  
	if(isset($_SESSION["email"]))
	{
		header("location: home.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
    
		<link rel="stylesheet" type="text/css" href="../css/index.css" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../css/designerHeader.css" />
				
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>		
    	<script src="../js/flip.js"></script>
	</head>

	<body>
    		<div class="row adjustment1">
        		<div class="col-md-12 adjustment2">
		            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		                </ol>
		                <div class="carousel-inner">
		                    <div class="item active">
		                        <img src="../Images/1.jpg" alt="First slide" style="width:100%; height:640px">
		                        <div class="carousel-caption">
		                        	<img src="../Images/icon2%402x.png" alt="img" style="height:50px">
		                            <h3>Student Information</h3>
		                            <p>Find all student information at one place</p>		                            
		                        </div>
		                    </div>
		                    <div class="item">
		                        <img src="../Images/2.jpg" alt="Second slide" style="width:100%; height:640px">
		                        <div class="carousel-caption">
		                        	<img src="../Images/icon1%402x.png" alt="img" style="height:50px">
		                            <h3>Anywhere Access</h3>
		                            <p>Access and grade student on mobile, saves time.</p>                            
		                        </div>
		                    </div>
		                    <div class="item">
		                        <img src="../Images/3.jpg" alt="Third slide" style="width:100%; height:640px">
		                        <div class="carousel-caption">
		                        	<img src="../Images/icon3%402x.png" alt="img" style="height:50px">
		                            <h3>Grade</h3>
		                            <p>Provide setting and grade students easily</p>                            
		                        </div>
		                    </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
		                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
		                        </span></a>
		            </div>
		            <div class="main-text">
		                <div class="col-md-12 text-center">		                    
		                    <div id="logo">
			                    <ul>
								 	<li>i</li>
								 	<li>G</li>
								 	<li>R</li>
								 	<li>A</li>
								 	<li>D</li>
								 	<li>E</li>
								 	<li>R</li>							 	
								</ul>
							</div>
							<div class="col-md-4 col-md-offset-4 php_error">
                    			<div class="alert alert-danger alert-dismissable">
                        			<a class="panel-close close" data-dismiss="alert">×</a>                         			
                        			<?php echo $error ?>
                    			</div>
                			</div>

							<div id="card-2" class="card">						      	
					          	<div class="login_button">		                    	
	                    			<span class="front login_effect">Sign in</span>
								</div>						      	
						      	
					          	<div class="back container">
					                <form class="col-md-offset-4 col-md-5 form-signin" method="post" action="index.php">
					                    <h2 class="form-signin-heading">Please sign in</h2>						                    
					                    <input type="email" name="email" id="inputEmail" class="form-control margin_bottom_10" placeholder="Email address" required>
					                    <input type="password" name="password" id="inputPassword" class="form-control margin_bottom_10" placeholder="Password" required>							                   
											<input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Sign in" />  						                    
					                </form>
					            </div>
						      	
    						</div>

		                    
		                </div>
		            </div>
		        </div>
		    </div>
		
		<div id="push">
		</div>

	</body>

	<script type="text/javascript">

	var error = '<?php echo $error; ?>';
	if(error == "") {             
            $(".php_error").hide();
        } else {
            $(".php_error").show();                            
        }

	$(".front").click(function(){
		 $(".login_button").css("margin-top", "30px");
	});

    $(function(){      
      $("#card-2").flip({
        axis: "x",
        reverse: true,
        trigger: "click"
      });
    });
    </script>

</html>

