<?php
/*   class ATM {
      public $custid;
      public $atmpin;
      public function PinChange($custid,$atmpin) {
               echo $custid;
               }
      public function CheckBalance($custid,$atmpin){
               echo "Balance 50000000";
               }
      public function miniStatement($custid) {
               echo "Mini Statement 50000000";
               }
      }
	  
  $custid = "123456";
  $atmpin = "0005";
  
  
   $obj = new ATM();
   $obj ->CheckBalance();*/
   
  /* 
class ParentClass 
{
	public function myOwnMethod($a,$b) {
 		echo "ParentClass method called";
 	}
}

class ChildClass extends ParentClass 
{
	public function myOwnMethod($a,$c) 
	{
	 echo "ChildClass method called";
 	}
}

/*function runClass(ParentClass $c) 
{
	$c->myOwnMethod();
}

$c = new ChildClass();
//runClass($c);
echo "<br>";
$c->myOwnMethod("a","b");
*/

?>
<?php

/*
class base

{

function add($a,$b)

{

$res=$a+$b;

echo "Sum of two number = ".$res;

}

}


class child extends base

{

function add($a,$b,$c)

{

$res=$a+$b+$c;

echo "Sum of three number = ".$res;

}

}

$obj= new child();

$obj->add(1000,500);
 */
?>


<?php
/*class base
{
	function add($a,$b)
	{
		$res=$a*$b;
		echo "Multiplication = ".$res;
	}
}

class child extends base
{
	function add($a,$b)
	{
		$res=$a+$b;
		echo "Sum  = ".$res;
	}
}

 $obj= new child();

 $obj->add(1000,500);
 */
?>

<hr /><hr />
<?php
/*class demo
{
	public $name="ravish";
	function disp()
	{
		echo $this->name."<br/>";
	}
}

class demochild extends demo
{
	function show()
	{
		echo $this->name;
	}
}	

$objdemo= new demochild;

echo $objdemo->name."<br/>";	

$objdemo->disp();

$objdemo->show();
*/
?>


<?php

/*class demo
{
	public $x=500;
	protected $y=10;
		
	function add()
	{
		echo "AAA===>".$sum=$this->x+$this->y."<br/>";
	}
}	
	
class child extends demo
{

	function sub()
	{
		echo "BBBBB===>".$sub=$this->x*$this->y."<br/>";
	}
}	

$obj= new child;

$obj->add();

$obj->sub();


$test = new demo;

echo $obj->x."<br/>";	
*/
?>

<?php

class demo
{
	private $name="shashi";
	
	function show()
	{
		echo "This is private method of parent class";
		echo "<br>";
		echo $this->name;
	}
}	

class child extends demo
{
	function show1()
	{
		//echo $this->name;
	}
}	

$obj= new child;

$obj->show();

$obj->show1();

?>
