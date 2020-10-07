<link href="style\base.css" type="text/css" rel="stylesheet" />
<?php
include("header.php");
?>
<div id="content">
<div id="AllList">
<ul>
    <li><a href="addBill.php">New Bill</a></li>
    <li><a href="addItem.php">Create Item</a></li>
    <li><a href="addUser.php">Create User</a></li>
    <li><a href="">Reports</a>
        <ul>
             <li><a href="userlist.php">User List</a></li>
             <li><a href="productlist.php">Item List</a></li>
             <li><a href="billList.php">Bill List</a></li>
         </ul>
      </li>    

</ul>
</div>


</div><!--closing of content-->

<?php

include("footer.php");

?>