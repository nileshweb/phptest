<?php
$host = "localhost";
$dbname = "phptest";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if(!$conn)
{
	echo "Database not connected".mysqli_connect_error();
	die();
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
	$(document).ready(function() {
	  $("#form1").validate();
	});
</script>
<form name="form1" id="form1" action="add_db.php">
<table align="center">
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name" id="name" value="" required /></td>
	</tr> 
	<tr>
		<td>Email:</td>
		<td><input type="email" name="email" id="email" value=""  required/></td>
	</tr> 
	<tr>
		<td>Phone:</td>
		<td><input type="text" name="phone" id="phone" value="" required /></td>
	</tr> 
	<tr>
		<td colspan="2"><input type="submit" name="s1" id="s1" value="Add" /></td>
	</tr> 
</table>
</form>



