<?php

if(@$_GET['q'] == 1)
{

	

$proid = @$_GET['proid'];



$proimage = @$_GET['proimg'];

$proprice = @$_GET['proprice'];


$protitle =  @$_GET['protitle'];

$prodesc = @$_GET['prodesc'];



}

?>
<html>
<haed>

		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">





	<style>




		@media screen and (max-width:600px)

		{

			table{
margin-right: -100px;


			}

			h2{

				color:red;
				margin:0px 100px;
			}

body{

		background-color:red; 

}



		}


img:hover
{
-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 

}

	body{

		background-color:#f5f5dc; 

}

</style>
	</head>
	<body>
<h2 style="margin:0px 0px 0px 580px;">Product Discription</h2>
<table style ="background-color:;margin:80px 200px;text-align:center;">

<tr>
<td>
<h3><?php  echo $protitle; ?></h3>

</td>

</tr>
<tr>
<td>

	<a href=""><img src="product_images/<?php echo $proimage; ?>" style='width:300px; height:400px;'/></a>
	<h3>RS:<?php echo $proprice;?></h3>
</td>
<td colspan="4">

	<h3>Product is good to Buy

	Good hand set for sale</h3>
	<button pid="<?php echo $proid; ?>" style="margin:0px -120px;width:90px;height:30px;" id="product" class="">AddToCart</button>

	</td>

	</tr>
<tr>
	<td >
		<h2 style="color:red">Description</h2>
	</td>
	<td colspan="4">
		<textarea rows="4" cols="60" style="color:brown;font-size:20px;"><?php echo $prodesc;?></textarea>
	</td>
</tr>


	</table>

	<script>

/*	$(document).ready(function(){
$("#product").click(function()

{

alert("hello");

}

);

}

	); */


	</script>

</body>
</html>


