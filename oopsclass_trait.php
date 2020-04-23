<?php
class Dish
{
	public function Sabji()
	{
		echo "This Dish is sabji";
	}

	public function Roti()
	{
		echo "This Dish is Roti";
	}
}

trait Sweets
{
	public function Barafi()
	{
		echo "<br>This is Trait function dish Sweets Barafi";
	}
}

trait Farsaan
{
	public function gathiya()
	{
		echo "<br>This is Trait function from farsaan gathiya";
	}
}

class Dish2 extends Dish
{
	use Sweets;
	use Farsaan;
	// Or use Sweets,Farsaan;
}

$obj = new Dish2();


$obj->Sabji();
$obj->Barafi();
$obj->gathiya();
?>