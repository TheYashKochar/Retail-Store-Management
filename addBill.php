<link href="style\base.css" type="text/css" rel="stylesheet" />

<?php
include("header.php");
?>
<div id="myForm">

<form method="POST" action="newBill.php">

<table align="center">
<tr><td>Enter Mobile Number</td><td><input type="text" name="Mob"/></td></tr>
<tr><td>Enter Product IDs</td><td><input type="text" name="PID"/></td></tr>
<tr><td>Enter Price</td><td><input type="text" name="Price"/></td></tr>
<tr><td>Enter AmtPaid</td><td><input type="text" name="AmtPaid"/></td></tr>
<tr><td height="50"><input type="submit" value="Add"/></td><td><input type="Reset" value="cancel"/></td></tr>
</table>
</form>

</div>
</div><!--closing of content-->

<?php

include("footer.php");

?>