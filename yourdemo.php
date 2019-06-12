<?php
session_start();
include("db.php");

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
		<style>
		.slide img:hove
{
-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 

}
			
body{

			
			background-color:white; 
		}


			@media screen and (max-width:600px){
				#search{width:60%;}
				#search_btn{width:10%;float:right;margin-top:-38px;margin-right:100px;}

        #scroll {
    width: 20%;
    height: auto;
    background-color: ;
    
    overflow: scroll;
    white-space:nowrap;
    
   
}
.slide {

  width: 100%;

}

  
			}


blink {
        animation: blinker 0.9s linear infinite;
        color: ##6A5ACD;
        font-size:30px;
       }
      @keyframes blinker {  
        50% { opacity: 0; }
       }

hr {

padding:1px;
	background-color:red;
}



       #scroll {
    width: 100%;
    height: auto;
    background-color: ;
    
    overflow: scroll;
    white-space:nowrap;
    
   
}
.slide {

  width: 20%;

}





#scroll .slide {
    display: inline-block;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: 80px;
  padding: 16px;
  margin-top: -22px;
  color: red;
  font-weight: bold;
  font-size: 38px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.prev1, .next1 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: 80px;
  padding: 16px;
  margin-top: 400px;
  color: red;
  font-weight: bold;
  font-size: 38px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.next1 {
  right: 0;
  border-radius: 3px 0 0 3px;
}


/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: black;
}


.text1 {
  color: red;
  font-style: italic;
  font-size: 25px;
  text-formate:italic;
  padding: 8px 12px;
  position: absolute;
  margin:-380px 90px ;
  width: 100%;
  text-align:left;
}

.text2 {
  color: #FFD700;
  font-style: italic;
  font-size: 25px;
  text-formate:italic;
  padding: 8px 12px;
  position: absolute;
  margin:-400px 250px ;
  width: 100%;
  text-align:center;
}

.text3 {
  color: red;
  font-style: italic;
  font-size: 25px;
  text-formate:italic;
  padding: 8px 12px;
  position: absolute;
  margin:-280px -60px ;
  width: 100%;
  text-align:center;
}
.text4 {
  color: white;
  font-style: italic;
  font-size: 25px;
  text-formate:italic;
  padding: 8px 12px;
  position: absolute;
  margin:-390px -80px ;
  width: 100%;
  text-align:center;
}

.container .btn {
  position: absolute;
  top: 200%;
  right: 20%;
  transform: translate(-10%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.container .text123 {


	 position: absolute;
  top: 180%;
  right: 20%;
  transform: translate(20%, -50%);
  -ms-transform: translate(-0%, -50%);
  background-color: 	;
  color: black;
  font-size: 26px;
 
  border: none;
  text-align: center;
}

.container .text143 {


	 position: absolute;
  top: 190%;
  right: 20%;
  transform: translate(20%, -50%);
  -ms-transform: translate(-0%, -50%);
  background-color: 	;
  color: black;
  font-size: 26px;
 
  border: none;
  text-align: center;
}


.container .btn:hover {
  background-color: black;
}


		</style>



	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="height:80px;">
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
            <li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
            <li class="divider"></li>
            <li><a href="" style="text-decoration:none; color:blue;">Chnage Password</a></li>
            <li class="divider"></li>
            <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
          </ul>
        </li>
        <li></li>


        <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
          <div class="dropdown-menu" style="width:400px;">
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
              <div class="panel-footer"></div>
            </div>
          </div>
        </li>
        
        
      </ul>
    </div>
  </div>
  </div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>

<div>
  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center" onclick="w3_close()">  



   <div class="w3-content w3-section" style="max-width:9000px;height:400px">
	   <div class="w3-image" style="max-width:9000px;height:400px">
    <a href="index1.php"><img src="product_images/glasses.jpg" alt="Me"  style="display:block;margin:auto;width:100%;height:100%" ></a>
   <div class="text1">The Brand You Look and Like<br><button class="btn" style="background-color:black;color:white;margin:20px 30px">Buy Now</button></div>

   </div>
   <div class="w3-image" style="max-width:9000px;height:400px">
   <a href="index1.php"><img src="product_images/marsbat.jpg" alt="Me"   style="display:block;margin:auto;width:100%;height:100%"> </a>
   <div class="text2">Bats on offer<h1><blink style="color:white">20%</blink></h1> Extra Hurry Up!<button class="btn" style="background-color:grey;color:white;margin:20px 30px">Buy Now</button></div>
   </div>  

	   <div class="w3-image" style="max-width:6000px;height:400px">  
    <a href="index1.php"><img src="product_images/kurtha2.jpg" alt="Me"   style="display:block;margin:auto;width:100%;height:100%">
    <div class="text3">The Brand and Beauty<br><blink style="color:black">Sale Begans</blink><button class="btn" style="background-color:black;color:white;margin:20px 30px">Buy Now</button></div>
    </div></a>
    <div class="w3-image" style="max-width:5000px;height:400px">
    <a href="index1.php"> <img src="product_images/tv1.jpeg" alt="Me"   style="display:block;margin:auto;width:80%;height:100%">
     <div class="text4">The More You Play<h2 style="color:red"><blink >The More You Earn</blink><button class="btn" style="background-color:white;color:red;margin:20px 30px">Buy Now</button></h2></div></a>


     </div>

     
     
    </div>
 
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="w3-padding-1" style="text-align: center">
      <h4><b>New Indian Style</b></h4>
      <h6><i>With Passion For Real, Good Products</i></h6>
      <h3><blink>Shop Now With Good Quality and Less Price</blink></h3>


    </div>
     </div>

 </div>

<hr>
<a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
<a class="next1" onclick="plusSlides(1)">&#10095;</a>
<div id="scroll"  >
<?php

$start = 0;
$limit = 9;
$product_query = "SELECT * FROM products LIMIT $start,$limit";
  $run_query = mysqli_query($con,$product_query);
  if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
      $pro_id    = $row['product_id'];
    $_SESSION["pro_cat"]  = $row['product_cat'];
      $pro_brand = $row['product_brand'];
      $pro_title = $row['product_title'];
      $pro_price = $row['product_price'];
      $pro_image = $row['product_image'];
      $prodesc  =   $row['product_desc'];
     
     echo   $_SESSION["pro_cat"]." 


    <div class='slide' id='{$_SESSION["pro_cat"]}'>
      <a href=profile.php?id={$_SESSION["pro_cat"]}><img  pid='{$_SESSION["pro_cat"]}' src='product_images/$pro_image'/ style='width: 100%; 
    height: 282px; margin:0px 20px;'  ></a>
    </div>" ;
    
  }
  }
    ?>




</div>



<p><br/></p>

	
<hr>

<div id="scroll">
    
    <?php

$start = 10;
$limit = 16;
$product_query = "SELECT * FROM products LIMIT $start,$limit";
  $run_query = mysqli_query($con,$product_query);
  if(mysqli_num_rows($run_query) > 0){
    while($row = mysqli_fetch_array($run_query)){
      $pro_id    = $row['product_id'];
      $_SESSION["pro_cat"]  = $row['product_cat'];
      $pro_brand = $row['product_brand'];
      $pro_title = $row['product_title'];
      $pro_price = $row['product_price'];
      $pro_image = $row['product_image'];
      $prodesc  =   $row['product_desc'];
     
     echo " 

    <div class='slide' id='{$_SESSION["pro_cat"]}'>
      <a href=profile.php?id={$_SESSION["pro_cat"]}><img  pid='{$_SESSION["pro_cat"]}' src='product_images/$pro_image'/ style='width: 100%; 
    height: 282px; margin:0px 20px;'  ></a>
    </div>" ;
    
  }
  }
    ?>


</div>

<hr>

<div class="container">


<img src="product_images/pink1.jpg"/ alt="Nature" class="responsive" width="100%" height="500">

<button class="btn">Buy Now</button>
  <div class="text123">The Brand You Look and Like</div>
  <div class="text143"><i>Let's Shop Now </i></div>

</div>
<hr>

<script>

	
var myIndex = 0;
carousel();

function carousel() {
	
  var i;
  var x = document.getElementsByClassName("w3-image");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}

	
</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("w3-image");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


</body>
</html>
















































