<?php
 //connect with mysql
         $con=mysqli_connect('localhost','root','');
		  
		  //select Database
		        mysqli_select_db($con,'ashwinidb');
				
			//select query
           $ashwinidb= "DELETE  FROM products WHERE product_id='$_GET[id]'";

          //Executing query
		  if(mysqli_query($con,$ashwinidb))
            header("referesh:1; url=delete.php");
		else
			echo"not Deleted";

		?>