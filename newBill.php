<?php
$Mob=$_REQUEST["Mob"];
$PID=$_REQUEST["PID"];
$Price=$_REQUEST["Price"];
$AmtPaid=$_REQUEST["AmtPaid"];

include("dbConnect.php");
mysql_query("insert into bill(Mob,PID, Price , AmtPaid) values('$Mob','$PID','$Price','$AmtPaid')") or die("Zero Exception");

header("location:adminChoice.php");


?>