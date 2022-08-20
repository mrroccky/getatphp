<?php 
//error_reporting(0);
include ("config.php");


$id=$_POST['id'];
$sql = "DELETE FROM registereduser WHERE id=".$id;

if ($connect->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $connect->error;
}

$connect->close();

//complite but we need to pass data fron f in string fromat int giving exeption


















?>