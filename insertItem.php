 <?php
//$PID=$_REQUEST["PID"];
$PName=$_REQUEST["PName"];
$Category=$_REQUEST["Category"];
$Price=$_REQUEST["Price"];

//move_uploaded_file($itemimg["tmp_name"],".\\collection\\$img");


include("dbConnect.php");
mysql_query("insert into product(PName,Category,Price ) values('$PName','$Category','$Price')") or die("query error");
echo('Success');
header("location:adminChoice.php");


?>