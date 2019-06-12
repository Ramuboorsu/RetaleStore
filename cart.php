<?php


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Retail store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>


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

}



	);


$("#get_category").mouseleave(function()
{

document.getElementById("get_category").style.display = "none";

}



	)




}




	);


</script>

<style>
hr
{

border:2px;
	color:red;
}

</style>

	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="height:90px;">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
		<div class="collapse navbar-collapse" id="collapse" style="margin:30px">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product
				</a></li>
				<li> <a href="">
          <span class="glyphicon glyphicon-th-list" id="list" style="color:red"></span>
          <div id="get_category" style="text-align:center;margin-top:10px;margin-left:-100px;display:none;background-color:brown; ">
				</div>
        </a></li>
				
			</ul>
		

		     <a href="index.php" class="navbar-brand" style='margin:0px 100px;'><b >Cadra Retail store</b></a>
		     <a href="bookings.php" class="navbar-brand" style='margin:0px 10px;'><b >Cadra Booking</b></a>

		 
		</div>
	</div>
</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	
	<div class="container-flui">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primar" style="width:1500px;margin:0px -240px;text-align: center;background-color:#f5f5dc;">
					<div class="panel-heading" style="background-color:grey;height:70px;" ><h3>Cart Details</h3></div>
					<br>
					<div class="panel-body"
					 style="margin:40px">
						<div class="row">
							
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in Rs</b></div>
						</div>
						<br>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</body>	
</html>
















		