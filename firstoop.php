<?php

class Student
{
	private $name,$rollno;
	
	function getData($name,$rollno)
	{
		$this->name = $name;
		$this->rollno = $rollno;
	}
	
	function showData()
	{
		echo "<h3>Student Name is : ".$this->name."    <br>Roll number is : ".$this->rollno."</h3>";
	}
	
}

$student = new Student;

$student->getData("Nilesh Chauhan", 11);

echo $student->showData();

?>