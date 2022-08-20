<?php 

	include ("config.php");
	//$conn =	dbconnection();

	$query = " SELECT *FROM registereduser";


	$exec = mysqli_query($connect,$query);

	//$arr=[];
	$result=array();

	// while ($row=mysqli_fetch_array($exec)) {
	// 	$arr =$row;
	// }		
	while($fetchData=$exec->fetch_assoc()){
	$result[]=$fetchData;
}
	echo json_encode($result)
 ?>