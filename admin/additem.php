<?php
session_start();
$name=$_SESSION['id'];
include("config123.php");

$product_cat=$_REQUEST['product_cat'];
$product_brand=$_REQUEST['product_brand'];
$product_title=$_REQUEST['product_title'];
$product_price=$_REQUEST['product_price'];

$product_desc=$_REQUEST['product_desc'];
$product_image=$_FILES['product_image']['name'];
$product_keywords=$_REQUEST['product_keywords'];
if(isset($_POST['sub']))
  {
    if(mysqli_query($con,"insert into products  values('','$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords') "))
	   {
	    move_uploaded_file($_FILES['tmp_name']['name'],"images/$image.jpg");
		
	    echo "<font size='+2'>item inserted successfully</font>";
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}   
		 
?><head>
<script>
function showUser(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("subcat").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","dd.php?q="+str,true);
xmlhttp.send();
}
</script>

</head>


<style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; }
-->
</style>
<body>
<br><br><br>

<br><br>
<fieldset style="width:50%;margin:0px 90px;text-align:center;">
  <legend style="margin:0px 220px;"><font color="#660066" size="+3">Add Item</font></legend>
<form  name="testform" method="post" enctype="multipart/form-data" >
<table align="center" style="text-align:center;">
<tr>
  <td><span class="style3">Product cat:</span></td>
  <td><label>
  <input name="product_cat" type="number" id="product_cat" required>
  </label></td>
</tr>
<tr>
  <td><span class="style3">Product brand:</span></td>
  <td><label>
  <input name="product_brand" type="number" id="product_brand" required>
  </label></td>
</tr>
<tr>
  <td><span class="style3">Product Title:</span></td>
  <td><label>
  <input name="product_title" type="varchar" id="product_title" required>
  </label></td>
</tr>
 <?php
$q=mysqli_query("select * from products ");
while($n=mysqli_fetch_array($q)){
echo "<option value=".$n['product_cat'].">".$n['product_brand'].">".$n['product_title'].">".$n['product_price'].">".$n['product_desc'].">".$n['product_image'].">".$n['product_keywords']."</option>";
}
?>



</td>
</tr>
<td><span class="style3">product price:</span></td>
  <td><label>
  <input name="product_price" type="double" id="product_price" required>
  </label></td>
<tr>
<td><span class="style3">Image:</span></td>
<td><input name="product_image" type="file" id="product_image" required></td></tr>

</tr>
<tr>
  <td span="4"><span class="style3">product desc:</span></td>
  <td><label>
  <input name="product_desc" type="varchar" id="product_desc" required>
  </label></td>
  <td><span class="style3">product keywords</span></td>
  <td><label>
  <input name="product_keywords" type="varchar" id="product_keywords" required>
  </label></td>
</tr>
<tr><td  colspan="5"  ><input name="sub" type="submit" value="Submit" style="background-color:green;padding:10px;margin:0px 50px;"></td></tr>
</table>

</form>
</fieldset>
</body>
