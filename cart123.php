
<?php

session_start();

if(@$_GET['q'] == 1)
{

  

$proid = @$_GET['proid'];



$proimage = @$_GET['proimg'];

$proprice = @$_GET['proprice'];


$protitle =  @$_GET['protitle'];

$prodesc = @$_GET['prodesc'];



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

<style>

img:hover
{
-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 

}

* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 5px;
}

.menu ul {

  list-style-type: none;
  margin: 0px;
  padding: 0;

}

.menu li {
  width:100%;
  padding: 8px;
  margin-bottom: 7px;
  background-color: #FFA07A;
  color: #ffffff;
  
}

.menu li:hover {
  background-color: #F39C12;
}


.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  margin-top:100px;
  background-color:black;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;

}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;


  }

  .img-responsive{

margin:0px 10px;


}

  .menu{

background-color: ;
margin:0px 0px;
width:80%;

  }
 .col-3 menu{



  }


}

.right{


  width:100%;
}
.menu{

  width:100%;
  text-align: center;
}
.hello
{

  width:100%;
}

.
</style>
</head>
<body>
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
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon 

<?php
if(isset($_SESSION["uid"]))
{
  ?>

<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo "Welcome,".$_SESSION["name"]; ?></a>
<ul class="dropdown-menu">
            <li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
            <li class="divider">0</li>
            <li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
            <li class="divider"></li>
            <li><a href="" style="text-decoration:none; color:blue;">Chnage Password</a></li>
            <li class="divider"></li>
            <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
          </ul>

         

          <?php 
        }
        else
        {


        ?>
        <a glyphicon-user" style="color:green;font-size:18px"></span>&nbsp;&nbsp;SignIn</a>
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
        <?php
      }
      ?>
     

          
        </li>
      </ul>
    </div>
  </div>
</div>  
<p><br/></p>
  <p><br/></p>
  <p><br/></p>
<div class="hell0" style="background-color:#e5e52e">
 <center> <h1>Your Cart</h1></center>
</div>
 
  <div class="" id="cart_msg" >
          </div>
<div id="cart_checkout" ></div>
</div>

<div class="footer">
  <p>@2019.</p>
</div>

</body>
</html>
