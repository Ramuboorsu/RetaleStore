<html>
<head>
<title>Delete records </title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>


</head>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    
    <thead>
	  <tr>
	  <th>productcat</th>
	  <th>productdesc</th>
	     <th>productname</th>
		 
		 <th>price</th>
		 <th>image</th>
		 <th>product brand</th>
		 <th>product keywords</th>
		 <th>Delete</th>
	 </tr>
	</thead>
    <?php
    //connect with mysql
         $con=mysqli_connect('localhost','root','');
		  
		  //select Database
		        mysqli_select_db($con,'ashwinidb');
				
			//select query
           $ashwinidb= "SELECT * FROM products";

      //Executing query
        $records =mysqli_query($con,$ashwinidb);

         while($row =mysqli_fetch_array($records))
		 {
			 echo "<tr>";
			 echo "<td>".$row['product_cat']."</td>";
			 echo "<td>".$row['product_brand']."</td>";
			 echo "<td>".$row['product_title']."</td>";
			 echo "<td>".$row['product_price']."</td>";
			 echo "<td>".$row['product_desc']."</td>";
			  echo "<td>".$row['product_image']."</td>";
		
			   echo "<td>".$row['product_keywords']."</td>";
			    echo "<td><a href=deleteitem.php?id=".$row['product_id'].">Delete</a></td>";
				
		 }		
     ?>
</table>
</body>
</html>		  
