<?php
session_start();
$name=$_SESSION['id'];
include("config.php");
$p_name=$_REQUEST['p_name'];
$image=$_FILES['image']['name'];
$price=$_REQUEST['price'];
if(isset($_POST['sub']))
  {
    if(mysql_query("delete from cartproduct where p_name='$p_name' image='$image'and price='$price' "))
	   {
	   
		
	    echo "item deleted successfully";
		}
	else
	 {
	   echo "item is not deleted";
	   }
	}   
		 
?>

<style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; }
-->
</style>
<body>
<br><br><br>
<center><font color="#660066" size="+2">Delete Item</font></center>
<br><br><br>
<form method="post" enctype="multipart/form-data">
<table align="center">
<tr><td><span class="style3">p_name:</span></td>
<td><select name="sel">

</select></td>
</tr>

<tr>
<td><span class="style3">Image:</span></td>
<td><input name="file" type="file"></td></tr>
<tr><td><span class="style3">price:</span></td>
<td><select name="sel">
<

</select></td>
</tr>
</table></form>
</body>
