<?php
//it givs last 50 records 
$host ="localhost";
$username = "root";
$password = "";
$databasename ="saynaa";


$connection = new mysqli($host,$username,$password,$databasename);
	if (!$connection) {
		echo "Database connection faild";
	}

$cnd = " SELECT *FROM corses ";



$query = mysqli_query($connection,$cnd);
$result = array();

while($fetchData=$query->fetch_assoc()){
	$result[]=$fetchData;
}
	echo json_encode($result)




?>
 