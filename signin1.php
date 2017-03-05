
<?php

	include 'config.php';


// Create connection
$conn =mysqli_connect($servername, $username, $password);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'USE loginform';
echo "processing";

mysqli_query($conn, $sql);

	$uname=$_POST["uname"];
	$pasw=$_POST["pasw"];

			$sql="SELECT * FROM login1 WHERE user='".$uname."'AND pass='".$pasw."';" ;
			$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
	session_start();
	$_SESSION["uname"]=$uname;
	header("Location:homepage.php");
}
else{
	echo "Incorrect match";
	header("Location:main.html");
}
	?>
