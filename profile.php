<?php
session_start();
include("db.php");

if(!isset($_SESSION["uid"])){
	header("location:demo.php");
}
else
{

	$sel = $con->query("select * from cart where user_id = '{$_SESSION["uid"]}' ");
while($row = $sel->fetch_assoc())
{

	$id = $row['p_id'];
}

	$update = $con->query("UPDATE cart SET user_id ='{$_SESSION["uid"]}' WHERE  user_id = -1"  );


if($update)
{

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<title>Retail store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>


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



		<style>
		body{




			
			background-color:#48453A; 
		}
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body >
	<div class="navbar navbar-inverse navbar-fixed-top" >
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product
				</a></li>
				<li> <a href="">
          <span class="glyphicon glyphicon-th-list" id="list" style="color:red"></span>
          <div id="get_category" style="text-align:center;margin-top:10px;margin-left:-100px;display:none;background-color:brown; "><div id="get_brand" style="margin-top:20px;margin-left:-120px;display:none; ">
				</div>
        </a></li>
				
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		        

		     </form>
				<a href="#" class="navbar-brand" style='margin:0px 100px;color:white'><b >Cadrac Retail Store</b></a>
				<a href="bookings.php" class="navbar-brand" style='margin:0px 0px;'><b >Cadra Booking</b></a>
			

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo "Welcome,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</span>(<span class="order"></span>)</a></li>
						
						<li class="divider"></li>
						<li><a href="" style="text-decoration:none; color:blue;">Chnage Password</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				<li></li>


				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;height:600px;overflow:scroll;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">Sl.No</div>
									<div class="col-md-3 col-xs-3">Product Image</div>
									<div class="col-md-3 col-xs-3">Product Name</div>
									<div class="col-md-3 col-xs-3">Price in RS.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
									<hr>
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"><div class="order"></div></div>

						</div>
					</div>
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
	<div class="container-fluid" >
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				\
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-offset-3" style="margin:0px 160px;">
				<div class="row">
					<div class="col-md-offset-3" id="product_msg" >
					</div>
				</div>
				<div class="panel panel-info" style="width:1490px;margin-left:-150px;">
					<div class="panel-heading" style="background-color:black;text-align:center;font-size:25px;color:yellow;">Products</div>


<div style="background-color:black;width:100%;text-align:center;" ><h2><a href="#" class="brand" id="brand" style="color:red">Brands</a></h2>	</div>



<div id="get_branded" style="display:none;background-color:black;width:100%;text-align:center;"></div>
	

					<div class="panel-body" >

<?php if(isset($_SESSION["pro_cat"]))
{
	$_SESSION["pid"] = @$_GET["id"];
	?>

						<div id="get_product111" >

							<!--Here we get product jquery Ajax Request-->
						</div>

<?php
}
else
{

	?>
	<div id="get_product" >

							<!--Here we get product jquery Ajax Request-->
						</div>
<?php
}
?>


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
					<div class="panel-footer">&copy; 2018

<span class="badge">0</span>

					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
</body>
</html>

<?php
}
?>














































