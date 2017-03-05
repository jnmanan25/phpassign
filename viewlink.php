<?php



include 'config.php';



$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'USE loginform';
mysqli_query($conn, $sql);

session_start();
$ename=$_SESSION["uname"];

$sql = "SELECT user,link FROM login3 WHERE user='".$ename."'";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
	$x=1;
    while($row=mysqli_fetch_assoc($result)){
    	echo "<p>link".$x.": ".$row["link"]."</p>";
    	$x=$x+1;
    }
    
}
else{
	echo "0 results";
}
$conn->close();
?>
<html>
<body>
<a href="homepage.php">Go back</a>
</body>
</html>
