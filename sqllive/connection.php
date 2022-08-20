<<?php 
echo "hiii";

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="saynadb";


$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . $conn->connect_error);

}

//send data to sql

$username =$_POST['username'];
$password =$_POST['password'];

$quaryst = " INSERT INTO login (heading.body) VALUES('".$username."','".$password."')";
$statment = $connection->prepare($quaryst);
$statment->execute();
echo json_encode("data inserted !!!!!!!!!!");


?>