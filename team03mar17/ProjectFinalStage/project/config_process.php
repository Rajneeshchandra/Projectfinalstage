<?php
include_once("config.php");

if(isset($_POST['name'], $_POST['email'], $_POST['phone'],$_POST['des'])) {
	//make the database connection
	
	$name = $_POST['name'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	$des = $_POST['des'];
	$conn  = db_connect();	
	//create an insert query 	
	$sql = "insert into contact (name, email, phone, des) 
			VALUES ('$name', '$email', '$phone','$des')";
	//execute the query
	if($conn -> query($sql))
	{
		echo "<h1>Thank you for your details please wait while our staff look into it </h1>";
		echo"<a href=\"index.php\"> HOME </a>";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?> 
  

