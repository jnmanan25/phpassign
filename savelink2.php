<?php



include 'config.php';


$link=$_POST["link"];

$conn = mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = 'USE loginform';
mysqli_query($conn, $sql);

session_start();
$uname=$_SESSION["uname"];

$sql = 'INSERT INTO login3 (user,link)
VALUES("'.$uname.'","'.$link.'");';

if (!(mysqli_query($conn, $sql))) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
else
echo "Data added";


header("Location:homepage.php");
$conn->close();
?>