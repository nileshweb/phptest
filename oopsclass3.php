<?php 
class Food
{
	
	
	function Data()
	{
		echo "This is DAta";
	}
}		

class Veg extends Food
{
	function Data($a)
	{
		echo "This is DAta Vegetable";
	}
}	
	

$obj = new Veg();
$obj->Data();

//$obj->fodname = "Apple";
//$obj->setData("Banana");
//$obj->showData();
