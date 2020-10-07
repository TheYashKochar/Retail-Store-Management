<link href="style\base.css" type="text/css" rel="stylesheet" />

<?php
include("header.php");
?>
<div id="myForm">

<form method="POST" action="checkLogin.php">

<table align="center">
<tr><td>Enter username</td><td><input type="text" name="user"/></td></tr>
<tr><td>Enter password</td><td><input type="password" name="pass"/></td></tr>
<tr><td height="50"><input type="submit" value="Login"/></td><td><input type="Reset" value="cancel"/></td></tr>
</table>
</form>

</div>
</div><!--closing of content-->

<?php

include("footer.php");

?>