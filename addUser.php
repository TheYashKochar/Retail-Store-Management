<link href="style\base.css" type="text/css" rel="stylesheet" />

<?php
include("header.php");
?>
<div id="myForm">

<form method="POST" action="insertUser.php">

<table align="center">
<tr><td>Enter Customer Name</td><td><input type="text" name="CName"/></td></tr>
<tr><td>Enter Mobile</td><td><input type="text" name="Mobile"/></td></tr>
<tr><td>Enter Address</td><td><input type="text" name="Address"/></td></tr>
<tr><td height="50"><input type="submit" value="Add"/></td><td><input type="Reset" value="cancel"/></td></tr>
</table>
</form>

</div>
</div><!--closing of content-->

<?php

include("footer.php");

?>