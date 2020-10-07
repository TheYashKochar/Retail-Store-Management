<?php session_start(); ?>
<?php
$a=$_REQUEST["user"];
$b=$_REQUEST["pass"];

include("dbConnect.php");

$result=mysql_query("select * from login where user = '$a' and pass = '$b' ") or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['user']== $a && $row['pass'] == $b ){
	//echo " Success".$row['user'];
	header("Location:adminChoice.php");
}
else {
	echo "Failed to login";
}
/*if(mysql_num_rows($rsUser)==0)
{
	header("location:login.php?status=1");
}
else
{
  $row=mysql_fetch_array($rsUser);
    if($row["userpass"]==$b)
	{
		$_SESSION["user"]=$a;
		if($row["usertype"]=="user")
		{
		  header("location:userChoice.php");	
		}
		else
		{
			header("location:adminChoice.php");
		}
	}
	else
	{
			header("location:login.php?status=2");

	}
}*/


?>