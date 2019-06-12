<?php
session_start();
$name=$_SESSION['id'];
include("config.php");


$p_name=$_REQUEST['p_name'];
$image=$_FILES['image']['name'];
$price=$_REQUEST['price'];
if(isset($_POST['sub']))
  {
    if(mysql_query("insert into cartproduct  values('','$p_name','$image','$price') "))
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
<center><font color="#660066" size="+3">Add Item</font></center>
<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >
<table align="center">
<tr>
  <td><span class="style3">Pname:</span></td>
  <td><label>
  <input name="p_name" type="varchar" id="p_name">
  </label></td>
</tr>
 <?php
$q=mysql_query("select * from tut ");
while($n=mysqli_fetch_array($q)){
echo "<option value=".$n['p_name'].">".$n['image'].">".$n['price']."</option>";
}
?>



</td>
</tr>
<tr>
<td><span class="style3">Image:</span></td>
<td><input name="image" type="file" id="image"></td></tr>

</tr>
<tr>
  <td><span class="style3">Price:</span></td>
  <td><label>
  <input name="price" type="double" id="price">
  </label></td>
</tr>
<tr><td  colspan="2" align="center"><input name="sub" type="submit" value="Submit"></td></tr>
</table>

</form>
</fieldset></center>
</body>
