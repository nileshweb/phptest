<?php 
class Parents
{
	function parent_function()
	{
		echo "This is Parents function";
	}
}

class Child extends Parents
{
	function child_function()
	{
		echo "This is Child function";
	}
}

$child = new Child();
$child->child_function();
$child->parent_function();

?> 
