<?php
session_start();


$ip_add = getenv("REMOTE_ADDR");
include "db.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#' style='width:200px;background-color:black;'><h4>Your Selection</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
			echo "
					<li><a href='#' class='category' cid='$cid' style='color:black;hover:red;'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["brand"])){
	
	$brand_query = "SELECT * FROM products";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
		

			
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["product_id"];
			$brand_name = $row["product_brand"];
			echo "
					<li><a href='#' class='selectBrand' bid='$bid' style='color:white;'>$brand_name</b></li>
			";
		}
		echo "</div>";
	}
}

if(isset($_POST["bookings"])){

	
	$brand_query = "SELECT * FROM bookings";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
		<li class='active'><a href='#' style='width:200px;background-color:black;'><h4>Your Selection</h4></a></li>
			
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$boid = $row["booking_id"];
			$bookname = $row["booking_items"];
			echo "
					<li><a href='#' class='book' boid='$boid' style='color:white;'>$bookname</a></li>
			";
		}
		echo "</div>";
	}
}




if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
		<li>
			<a href='#' page='$i' id='page' style='color:black;font-size:25px;margin:0px 5px'>$i&nbsp;&nbsp;&nbsp;</a>
			</li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 9;


	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$prodesc  =   $row['product_desc'];
			echo "
				<div class='col-md-4' style='text-align:center;'>
							<div class='panel panel-info' ;'>
								<div class='panel-heading' style='background-color:	#CD5C5C;text-align:center;font-size:15px;color:black'><b>$pro_title</b></div>
								<div class='panel-body'>
									<a href='trail.php?q=1&proid=$pro_id&proimg=$pro_image&proprice=$pro_price&protitle=$pro_title&prodesc=$prodesc '> <img src='product_images/$pro_image' style='width:200px; height:250px;'/></a>

								
								</div>
								<b style='margin:50px -130px'>RS: $pro_price.00</b>
								<div class='panel-heading' style='background-color:#0f045c;'>	
									<button pid='$pro_id' style='margin:0px -120px;width:90px;height:30px;color:white;' id='product' class='btn btn-success btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}
}



if(isset($_POST["getall"]))
{



		$sql = "SELECT product_brandname FROM products  group by product_brandname ";

		$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			
			$pro_name   = $row['product_brandname'];
				
			echo "
				
				<div class='brandname' brndid='$pro_name'style='text-align:center;margin-top:10px;display:block;background-color:brown;width:100% ;color:yellow'><a href='#' style='color:yellow'>$pro_name</a></div>";
	}
}




if(isset($_POST["get_branded"]))
{
$id = $_POST["did"];


		$sql = "SELECT product_brandname FROM products WHERE product_cat = '$id' group by product_brandname ";

		$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			
			$pro_name   = $row['product_brandname'];
				
			echo "
				
				<div class='brandname' brndid='$pro_name'style='text-align:center;margin-top:10px;display:block;background-color:brown;width:100% ;color:yellow'><a href='#' style='color:yellow'>$pro_name</a></div>";
	}
}


if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])||isset($_POST["selected"])||isset($_POST["get_brandname"])||isset($_POST["range"])||isset($_POST["outrange"])||isset($_POST["brandnamerange"])){

	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE product_cat = '$id'";

		$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$prodesc = $row['product_desc'];	
			

	}
}

elseif(isset($_POST["get_brandname"])){

	$bid = $_POST["brid"];
		$sql = "SELECT * FROM products WHERE product_brandname = '$bid' ";

}


elseif(isset($_POST["brandnamerange"])){

$min = $_POST['min_price'];	
$max = $_POST['max_price'];	
	$brandid = $_POST["brandid"];
		$sql = "SELECT * FROM products WHERE product_price  BETWEEN  '$min' AND '$max' AND product_brandname = '$brandid' ";

}



elseif(isset($_POST["range"]))

{

	$min = $_POST['min_price'];	
$max = $_POST['max_price'];	

$rid = $_POST['rid'];	

echo '<script>alert("'.$rid.'");</script>';




	$sql = "SELECT * FROM products WHERE product_price BETWEEN '$min' AND '$max' AND product_cat = '$rid'";

}

elseif(isset($_POST["outrange"]))

{

	$min = $_POST['min_price'];	
$max = $_POST['max_price'];	

	




	$sql = "SELECT * FROM products WHERE product_price BETWEEN '$min' AND '$max'";

}



elseif(isset($_POST["selected"])){
		
		$sql = "SELECT * FROM products WHERE product_cat = '{$_SESSION["pid"]}'";
	}


	elseif(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	}




	else {
		$keyword = $_POST["keyword"];
		

		
		$sql = "SELECT * FROM products WHERE product_title LIKE '%$keyword%'";
	}
	
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			$prodesc = $row['product_desc'];	
			echo "
				<div class='col-md-4'>
		
							<div class='panel panel-info' style='text-align:center;'>
								<div class='panel-heading' style='background-color:#a9b329;text-align:center;font-size:15px;color:black'>$pro_title</div>
								<div class='panel-body'>
									<a href='discription.php?q=1&proid=$pro_id&proimg=$pro_image&proprice=$pro_price&protitle=$pro_title&prodesc=$prodesc '> <img src='product_images/$pro_image' style='width:160px; height:250px;'/></a>

								</div>
								<b style='margin:50px 120px'>RS: $pro_price.00</b>
								<div class='panel-heading' style='background-color:#0f045c;'>
									<button pid='$pro_id' style='margin:0px 120px;width:90px;height:40px;' id='product' class='btn btn-success btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}
	


	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
		}else{
			$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product is Added Successfully..!</b>
					</div>
				";
				exit();
			}
			
		}
		
		
		
		
	}

//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}


if (isset($_POST["coun_bookings"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_bookings FROM bookcart WHERE user_id = $_SESSION[uid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_bookings FROM bookcart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}


//Count User cart item


if(isset($_POST["order_count"]))
{

if(isset($_SESSION["uid"]))
{
	$sql = "SELECT COUNT(*) AS count_orders FROM orders WHERE user_id = $_SESSION[uid]";
}
$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_orders"];
	

	exit();


}



//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_desc,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
	}else{
		//When user is not logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_desc,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
	}
	$query = mysqli_query($con,$sql);
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];
				echo '
					<div class="row">
						<div class="col-md-3">'.$n.'</div>
						<div class="col-md-3"><img class="img-responsive" src="product_images/'.$product_image.'" /></div>
						<div class="col-md-3">'.$product_title.'</div>
						<div class="col-md-3">RS'.$product_price.'</div>

					</div>
				<b style="color:red;"><hr  ></b>';
				
			}
			?>
				<a style="margin:0px 140px;" href="cart123.php" class="btn btn-danger">Edit&nbsp;&nbsp;</span></a>
			<?php
			exit();
		}
	}
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
			//display user cart item with "Ready to checkout" button if user is not login
			echo "<form method='post' action='login_form.php'>";
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["product_id"];
					$product_title = $row["product_title"];
					$product_price = $row["product_price"];
					$product_image = $row["product_image"];
					$descp = $row["product_desc"];
					$cart_item_id = $row["id"];
					$qty = $row["qty"];

					echo 
						'
								
								
								<div class="row">
								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>

  <div class="col-3 menu" >
  
    <ul>
    <li><img class="img-responsive" src="product_images/'.$product_image.'" style="float:right;width:450px;height:480px;"> <h3>'.$product_title.'&nbsp;&nbsp;&nbsp;RS:'.$product_price.' </h3></li>
    <li><h3>Action</h3><h4> <a href="#" remove_id="'.$product_id.'" class="remove"><span class="glyphicon glyphicon-trash" style="color:red;font-size:20px;"></span></a>
  <a href="#" update_id="'.$product_id.'" class="update" ><span class="glyphicon glyphicon-ok-sign" style="color:green;font-size:20px;"></span></a></h4></li>

</li>
<li>
  <h2>Costing</h2>
 <p>Qty:<input type="number" class="qty"  value="'.$qty.'" min="1" style="width:3em;color:black"></h5>
   
      <h5>Cost:<input type="text" class=" price" value='.$product_price.' readonly="readonly" style="width: 6em;color:black;height:50px;text-align:center;background-color:		#fccfcf;"> 
      Total:<input type="text" class=" total" value="'.$product_price.'" readonly="readonly" style="width: 6em;color:black;height:50px;text-align:center;background-color:		#fccfcf;"></p>
</li>
<li>
 <h2>Description</h2>
 <h3>'.$descp.'</h3>

</li>

   
  
 
   
    </ul>
  </div>
  
  



  </div>


							<hr >';
				}
			
				echo '<div class="" style="margin:0px 80px;">
							<div class=""></div>
							<div class="">
								<b class="net_total" style="font-size:16px;"> </b>
					</div>';
				if (!isset($_SESSION["uid"])) {
					echo '<input type="submit" style="color:red;" name="login_user_with_product" class="btn btn-info btn-lg" value="payment" >
							</form>

							</div>';
					
				}else if(isset($_SESSION["uid"])){
					//Paypal checkout form
					echo '
						</form>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="business" value="shoppingcart@khanstore.com">
							<input type="hidden" name="upload" value="1">';
							  
							$x=0;
							$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
							$query = mysqli_query($con,$sql);
							while($row=mysqli_fetch_array($query)){
								$x++;
								echo  	
									'<input type="hidden" name="item_name_'.$x.'" value="'.$row["product_title"].'">
								  	 <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
								     <input type="hidden" name="amount_'.$x.'" value="'.$row["product_price"].'">
								     <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';
								}
							  
							echo   
								'<input type="hidden" name="return" value="http://localhost/project1/payment_success.php"/>
					                <input type="hidden" name="notify_url" value="http://localhost/project1/payment_success.php">
									<input type="hidden" name="cancel_return" value="http://localhost/project1/cancel.php"/>
									<input type="hidden" name="currency_code" value="USD"/>
									<input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>
									<input style="float:right;margin-right:80px;" type="image" name="submit"
										src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="PayPal Checkout"
										alt="PayPal - The safer, easier way to pay online">
								</form>

								<div>
								<form method="post" action="address.php">
                                <input type="submit" value="payment">
                                </form>

								</div>';


								
				}
			}
	}
	
	
}





//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}




?>






