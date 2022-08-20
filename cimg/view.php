<?php 

	$db = mysqli_connect('localhost','root','','saynaa');
	if (!$db) {
		echo "Database connection faild";
	}

	$person = $db->query("SELECT * FROM t_images");
	$list = array();

	while ($rowdata= $person->fetch_assoc()) {
		$list[] = $rowdata;
	}

	echo json_encode($list);