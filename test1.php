<?php
$name = "John";
$profile = "PHP Developer";
$age = 25;
echo $name , $profile , $age, " years old";
exit;

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
	
	
  for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
  
  exit;

$host = "localhost";
$dbname = "phptest";
$username = "root";
$password = "";


$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn)
{
	echo "Database not connect".mysqli_connect_error();
	die();
}

$Qsel = "SELECT * FROM user";
$rs = mysqli_query($conn,$Qsel);

while($v = mysqli_fetch_array($rs))
{
	echo $v['email'];
	echo "<br>";
}

$Qins = "INSERT INTO user set name = 'salman', email = 'salman@gmail.com', phone = '111555666'";
mysqli_query($conn,$Qins) or die("can not insert data".mysqli_error());

echo "<hr>";
echo "<br>";
echo "<hr>";


$rs1 = array("james","bond","salman");
//$rs1 =  array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($rs1 as $v1 => $key)
{
	echo $v1."====>".$key;
	echo "<br>";
}


?>