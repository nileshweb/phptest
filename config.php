<?php
$host = "localhost";
$dbname = "phptest";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn)
{
	echo "Cound not connect database".mysqli_connect_error();
}



$Qsel = "SELECT * FROM user";
$rs1 = mysqli_query($conn,$Qsel);

while($rs = mysqli_fetch_array($rs1))
{
	echo $rs['id'];
	echo "<BR>";
}




?>