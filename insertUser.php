<?php
$nm=$_REQUEST["CName"];
$ct=$_REQUEST["Mobile"];
$addr=$_REQUEST["Address"];

include("dbConnect.php");
mysql_query("insert into customer(CName,Mob,Address) values('$nm','$ct','$addr')") or die("query error");
echo('Success');
header("location:adminChoice.php");


?>