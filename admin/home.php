<?php
error_reporting(1);
session_start();
$name=$_SESSION['eid'];
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else if($name=="")
{
header("location:index.php");
}
?>
<head>
<style>
a{text-decoration:none}
a:hover{background-color:yellow}

</style>
</head>
<body bgcolor="white" style="height:100%">
<div style="width:100%;float:left">
<div style="width:13%;float:left"><img src="usepics/2.jpg" width="182" height="300"/></div>
<div style="width:86.25%;height:27%;float:right;background-color:yellow">
  	<div  style="width:80%;height:10%;float:right">
	<!-- Start of Page Search -->

		

		  <!--</form>-->
		

		<!-- End of Page Search -->
	</div>

  <div style="width:50%;height:10%;float:right">
<br /><br /><br /><br/>
    <a href="?con=hm"><font color="#660066" size="+2">Home</font></a>&nbsp;&nbsp;&nbsp;&nbsp; 
	<a href="?log=out"><font color="#660066" size="+2">LogOut</font></a>
  </div>
</div>
</div>

<div>

<div style="width:13.7%;height:100%;float:left;background-color:yellow">
  <div align="center"><br />
  	<a href="viewdetails.php"><font color="#660066" size="+2">View Customersdetails</font></a><br/>
      <br />
      <a href="?con=add"><font color="#660066" size="+2">Add Item</font></a><br/>
    <br />
<a href="delete.php"><font color="#660066" size="+2">Delete Item</font></a><br/>

 
	</a><br/><br/>
	 
	 <?php
	 include("config123.php");
$count=0;
$sel=mysqli_query($con,"select * from orders");
$count=mysqli_num_rows($sel);
echo $count;
	 ?>
	</a>
	<br/><br/>
	 
	 <?php
	 include("config123.php");
$count=0;
$sel=mysqli_query($con,"select * from fdbk");
$count=mysqli_num_rows($sel);
echo $count;
	 ?>
	</a>

	</div>
</div>
<div style="width:70%;height:100%;float:right;background-image:url(images/.jpeg)" >
<?php
switch($_REQUEST['con'])
{
case 'add':include("additem.php");
        break;


case 'hm':include("hm.php");
        break;
		}
		if($_REQUEST['view'])
		{
		include("viewtable.php");
		}
	
		?>
	
</div>
</div>

</body>