<?php
class A	
{
final	function show1($x,$y)
	{
		$sum=$x+$y;
		echo "Sum of given no=".$sum;
	}
} 
class B extends A
{
	function show($x,$y)
	{
		$mult=$x*$y;
		echo "Multiplication of given no=".$mult;
	 }
}	 
$obj= new B();
$obj->show(5,5);




echo "<BR><br>";
define("MINSIZE", 50);
   
   echo MINSIZE;
   echo constant("MINSIZE"); // same thing as the previous line


?>

<hr /><hr />

<?php


class ClassName1 {
  public function staticMethod1() {
    echo "Hello World!";
  }
}

ClassName1::staticMethod1(); 





class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();

?>