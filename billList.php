<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: yellow;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Bill ID</th>
<th>Date and Time</th>
<th>Mobile Number</th>
<th>PIDs</th>
<th>Price</th>
<th>AmtPaid</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "retailstore");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bill";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result-> fetch_assoc()) {
echo "<tr><td>" . $row["Billid"]. "</td><td>" . $row["Date/Time"] ."</td><td>" . $row["Mob"] ."</td><td>" . $row["PID"] ."</td><td>" . $row["Price"] . "</td><td>". $row["AmtPaid"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>