<?php

abstract class User
{
	abstract public function sayHello();
	
	public function printHello()
	{
		echo "This only for testing purpose";
	}
}

/*class speak extends User
{
	public function sayHello()
	{
		echo "Hello";
	}
}*/
//$ab = new User();

$abc = User::printHello();
?>