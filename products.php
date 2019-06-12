<?php
include "db.php";
 
$min_price=$_GET['min_price'];
$max_price=$_GET['max_price'];
 
//echo "Test min price".$min_price;
 
$r=$con->query("SELECT * FROM products WHERE product_price BETWEEN '$min_price' AND '$max_price' ");
 
while($row=$r->fetch_assoc()){
	
	echo "<div class='pr_list'>";
		echo "<b>".$row['title']."</b><br>";
		echo "<img src='https://localhost/ajax_example/uploads/".$row['image']."' style='max-height:130px'><br>";
		echo "Cost Rs. ".$row['cost']."<br>";
		
	echo "</div>";
	
}
?>