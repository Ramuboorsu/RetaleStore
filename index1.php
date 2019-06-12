<?php

session_start();

include("db.php");
if(isset($_SESSION["uid"])){





	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Retale Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

		<style>
		img:hover
{
-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 

}


			
body{

			
			background-color:#48453A; 
		}
			@media screen and (max-width:800px){

				#pannel{

					background-color:yellow;
					width:600%;
					margin-left:-170px;
					margin-top: 20px;



				}
				#search{width:60%;}
				#search_btn{width:10%;float:right;margin-top:-38px;margin-right:100px;}



				#head1{
					margin:0px 50px;
				
					width:80%;



				}
				.btn{

					margin:0px -60px;
				}

img{


	width:100px;
}}

		</style>




<script>

$(document).ready(function()


{

	document.getElementById("get_category").style.display = "none";

$("#list").hover(function(){

document.getElementById("get_category").style.display = "block";



});

$("#get_category").click(function()
{

document.getElementById("get_category").style.display = "none";

}	);
$("#get_category").mouseleave(function()
{
document.getElementById("get_category").style.display = "none";
})
});

</script>


<script>

$(document).ready(function()


{

$("#brand").hover(function(){


document.getElementById("get_branded").style.display = "block";




});

$("#get_branded").click(function()
{

document.getElementById("get_branded").style.display = "none";

}	);
$("#get_branded").mouseleave(function()
{
document.getElementById("get_branded").style.display = "none";
})
});

</script>





	</head>
<body>
<div class="wait overlay">
	<div class="load"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" ">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
		<div class="collapse navbar-collapse" id="collapse" >
			<ul class="nav navbar-nav">
				<li><a href="demo.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index1.php"><span class="glyphicon glyphicon-modal-window"></span>Product
				</a></li>
				<li> <a href="">
          <span class="glyphicon glyphicon-th-list" id="list" style="color:red"></span>
          <div id="get_category" style="text-align:center;margin-top:10px;margin-left:-100px;display:none;background-color:brown; ">
				</div>
        </a></li>
				<li><a href="reg.php?register">Register</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		        

		     </form>

		     <a href="index1.php" class="navbar-brand" style='margin:0px 100px;'><b >Cadra Retail store</b></a>
		     <a href="bookings.php" class="navbar-brand" style='margin:0px 10px;'><b >Cadra Booking</b></a>


			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-shopping-cart" style="font-size:18px;color:red;"></span>&nbsp;&nbsp;Cart<sup><span class="badge">0</span></sup></a>
					<div class="dropdown-menu" style="width:400px;height:600px;overflow:scroll;">
						<div class="panel panel-success">
							<div class="panel-heading" >
								<div class="row" >
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in Rupees.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in rs.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="color:green;font-size:18px"></span>&nbsp;&nbsp;SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel " style="text-align:center;background-color:#D2691E;color:white;">
								<div class="panel-heading"><h3>Login</h3></div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<br>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:left;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	

<div class="range" style="background-color:white;margin:60px 05px;height:80px; ">
<div data-role="page">
  <div data-role="header">
  		<?php
  include("rangefilter.php");
  ?>
  	<br>
  	<br>
  
  </div>


</div> 
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			
			<div class="col-md-offset-3 head1" id="head1" style="margin:0px 160px;">
				<div class="row">
					<div class="" id="product_msg" >
					</div>
				</div>
				<div class="panel panel-info"  id="pannel" style="width:125%;margin-left:-150px;margin-top:0px;">

					<div class="panel-heading" style="background-color:black;text-align:center;font-size:25px;color:yellow;">Products</div>
	<div style="background-color:black;width:100%;text-align:center;" ><h2><a href="#" class="brand" id="brand" style="color:red">Brands</a></h2>	</div>



<div id="get_branded" style="display:none;background-color:black;width:100%;text-align:center;"></div>
	
		

					<div class="panel-body">
						


					
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
					
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer" style="text-align:center;">Retail store &copy; 2019</div>
				</div>
			</div>
			<div class="col-md-1"></div>
			<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						
					</ul>
				</center>
			</div>
		</div>
		</div>
	</div>
</body>
</html>
















































