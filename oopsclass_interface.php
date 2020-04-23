<?php

interface User
{
	public function sayUser();
}	
interface Test
{
	public function testUser();
}	

class UserTest implements User,Test
{
	public function sayUser()
	{
	
	}
	public function testUser()
	{
	
	}	
}

?>