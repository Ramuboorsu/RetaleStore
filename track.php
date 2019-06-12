<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Retail Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>

	img:hover
{
-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 

}

input[type=range]:hover
{
-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 


}
			table tr td {padding:10px;

			}


			@media screen and (max-width:480px){

				


			}


			.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Retail Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid"  style="background-color:red;">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="">
				<div class="panel panel-default" style="width:100%; background-color:DarkCyan;text-align:center;color:white">
					<div class="panel-heading"></div>
					<div class="panel-body" >
						<h1> Order Tracking details</h1>
						<hr/>
						<?php
							include_once("db.php");
							$user_id = $_SESSION["uid"];
							$orders_list = "SELECT o.order_id,o.user_id,o.product_id,o.qty,o.order_trid,o.p_status,o.p_deliverytime,o.time,p.product_title,p.product_price,p.product_image FROM orders o,products p WHERE o.user_id='$user_id' AND o.product_id=p.product_id";
							$query = mysqli_query($con,$orders_list);
							if (mysqli_num_rows($query) > 0) {
								while ($row=mysqli_fetch_array($query)) {
									?>
										<div class="row" style="background-color: DarkCyan;">
											<div class="col-md-6">
												<img style="float:;height:300px;width:300px;" src="product_images/<?php echo $row['product_image']; ?>" class="img-responsive img-thumbnail"/>
											</div>
											<div class="col-md-6">
												<table>
													<tr><td>Order Summary:</td><td><b><?php echo "delevired by:".$row["p_deliverytime"]; ?></td></tr>

													

<div class="slidecontainer" style="margin-top:40px;width:100%;background-color: DarkCyan;">

  
  <?php

date_default_timezone_set('Asia/Kolkata');
$daytoday = date('d-m-Y ');

$stime=$row["time"];
 $pdel = $row["p_deliverytime"];
$date1=date_create("$stime");
$date2=date_create("$pdel");
$date3=date_create("$daytoday");
$diff=date_diff($date1,$date2); 
$diff1=date_diff($date3,$date2); 

$left_t = $diff->format("%a");
$t_time= $diff1->format("%a");





if($left_t == $t_time)
{

$tot = 0;

$msg = "Order Received.Thanks For Selecting Us";

}
elseif($t_time > 0  && $t_time < ($left_t))
{
	$tot =50;
	$msg = "Your Orded is Ready to ship. Thanks For Selecting Us";
}
elseif($left_t == 0)
{
	echo "hello";
	$tot = 100;
}
?>

  
  <table>
  	<tr>
  		<td>
  		<?php echo $left_t."-days to go"; ?>
  	</td>
  	</tr>
<tr>
<td><h4>Packing</h4></td>
<td></td>


<td><h4>Shipping</h4></td>

<td></td>
<td><h4>Delivered</h4></td>
<td></td>

</tr>
<tr >
<td colspan="14">
  <input type="range" min="1" max="100" value="<?php echo $tot; ?>" class="slider" id="myRange">
  </td>
  </tr>
  <tr>
  	<td colspan="14" style="text-align: center;"><?php echo $msg; ?></td>
  </tr>
  
  </table>

											</div>
										</div>
										<hr >
									<?php
								}
							}
						?>
						
					</div>
					
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
















































