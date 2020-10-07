<link href="style\base.css" type="text/css" rel="stylesheet" />

<?php
include("header.php");
?>
<div id="content">

<div id="myForm">
 <?php
   if(isset($_REQUEST["status"]))
   {
 ?>
 <div id="responseMsg">
    Data Saved
 </div>
 <?php
   }
 ?>
 <form method="post" action="insertItem.php"
 enctype="multipart/form-data">
 
  <table align="center" cellspacing="10">
   <tr><td>Enter Item Name</td><td><input type="text" name="txtItemName"></td></tr>
   <tr><td>Choose Item Image</td><td><input type="file" name="flImage"></td></tr>
   <tr><td> Item Description</td><td><input type="text" name="txtItemDesc"></td></tr>
   <tr><td> Item Rate</td><td><input type="text" name="itemRate"></td></tr>
   <tr><td>Discount</td><td><input type="text" name="discount"></td></tr>
   
      
   </td></tr>
   <tr><td>Parent Category</td><td>
   <select name="cmbParent">
   <option value='0'>Choose Any Category</option>

        <?php
		  include("dbConnect.php");
		  $rsitem=mysql_query("select itemid, itemname from item_detail order by itemname");
		  while($row=mysql_fetch_array($rsitem))
		  {
			  $id=$row["itemid"];
			  echo("<option value='$id'>");
			  echo($row["itemname"]);
			  echo("</option>");			  
		  }
		?>

   </select>
   
   </td></tr>


 
   <tr> <td height="50"><input type="submit" value="Ok"></td><td>
     <input type="reset" value="Cancel">
   </td></tr>   
  </table>
 </form>
</div>

</div><!--closing of content-->

<?php

include("footer.php");

?>