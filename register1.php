<?php
	$fname=$_POST["fname"];
	$uname=$_POST["uname"];
	$pasw=$_POST["pasw"];

	include 'config.php';


	$conn =mysqli_connect($servername,$username,$password);

if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	
	$sql = 'USE loginform';
mysqli_query($conn,$sql);

session_start();
	
	$_SESSION['uname']=$uname;

			$sql='INSERT INTO login1 (name, user, pass) 
			VALUES("'.$fname.'","'.$uname.'","'.$pasw.'");';

if((mysqli_query($conn,$sql))){
	echo "error : " . $sql . "<br>" . $conn->error;
}
	header("Location:homepage.php");
?>