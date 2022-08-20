<?php

include ("config.php");


	$query = "SELECT *FROM t_images";


	$exec = mysqli_query($connect,$query);

	//$arr=[];
	$result=array();
	
	
        echo json_encode($result);
        if ($result->num_rows > 0) {
            while($fetchData=$exec->fetch_assoc()){
                $result[]=$fetchData;
            }
            echo json_encode($result);
        }    







