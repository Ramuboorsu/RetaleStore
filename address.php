<?php
session_start();
include("db.php");

$sel = $con->query("select * from user_info where user_id='{$_SESSION["uid"]}'");

while($fet=mysqli_fetch_assoc($sel))
{

$add1 = $fet['address1'];
$add2 = $fet['address2'];
$add3 = $fet['country'];
$add4 = $fet['address_instruction'];




}


if ($add1 == ''||$add2 == ''||$add3 == ''||$add4 == '') {


  if(isset($_POST['submit']))
{


$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$country = $_POST['country'];
$instructions = $_POST['instructions'];



$ins = $con->query("update user_info set address1 = '$address1',address2 = '$address2',country = '$country',address_instruction = '$instructions' where user_id ='{$_SESSION["uid"]}'");

if($ins>0)
{
  echo '<script>alert("updated");location.reload();</script>';

}


}




?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

fieldset{

width:50%;

}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  text-align: center;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<center><h3>Adress Form</h3></center>

<div class="container">
  <center>
  <fieldset>
  <form method="post">
    <label for="fname">Address1</label>
    <input type="text" id="fname" name="address1" value="<?php echo $add1  ?>" placeholder="Your name.." style="height:100px;width:300px;">
<br>
    <label for="lname">Address2</label>
    <input type="text" id="lname" name="address2" value="<?php echo $add2  ?>" placeholder="Your last name.." style="height:100px;width:300px;">
<br>
    <label for="country">Country</label>
    <select id="country" name="country"  style="width:300px;">
      <option value="india" name="country">India</option>
      
    </select>
<br>
    <label for="subject">Land Mark</label>

    <input type="text" id="lname" name="instructions" value="<?php echo $add4  ?>" placeholder="Address instructions.." style="height:100px;width:300px;">
<br>
    <input type="submit" name="submit" value="Submit">
  </form>
</fieldset>
</center>
</div>

</body>
</html>
<?php

}
else
{

$sel = $con->query("select * from cart where user_id='{$_SESSION["uid"]}'");

date_default_timezone_set('Asia/Kolkata');
$time = date('d-m-Y ');
$afttime = date("d-m-Y ", strtotime("+1 week"));

$order_trs = md5(uniqid(rand(), true));


while($row = $sel->fetch_assoc())
{

  $userid = $row['user_id'];
  $productid = $row['p_id'];
  $aty = $row['qty'];

$ins = $con->query("insert into orders(order_id,user_id,product_id,qty,order_trid,p_status,time,p_deliverytime) values('','$userid','$productid','$aty','$order_trs','','$time','$afttime')");

if($ins>0)
{

  $sel1 =$con->query("select * from orders where user_id='{$_SESSION["uid"]}'");
  while($row = $sel1->fetch_assoc())
  {

    $update = $row['p_deliverytime'];
  }

  $email = $_SESSION["email"];
  echo '<script>alert("'.$email.'");</script>';
require_once("phpotp/mail_function.php");
$mail_status = sendMsg($email,$order_trs);

echo '<script>alert("your product will delivered by -'.$mail_status.'"); </script>';

echo '<script>alert("your product will delivered by -'.$update.'"); </script>';
$ups = $con->query("delete from cart where user_id = '{$_SESSION["uid"]}'");
  echo '<script>window.location.href=("cart123.php");</script>';
}

else
{
  '<script>alert("something wrong");</script>';
}

}



}

?>
