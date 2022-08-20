<<?php 
include 'connection.php';


$table = "sqltital";

if ("CREATE_TABLE ==$action") {
    $sql = "CREATE TABLE IF NOT EXISTS $table (id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    tital VARCHAR(30) NOT NULL,";
if ($conn->query($sql)==TRUE) {
    echo("sucsess");
}else{
    echo("error");
}
$conn->close();
return;
}

if ("GET_ALL" == $action) {
    $db_data =array();
    $sql = "SELECT id , tital, from $table ORDER BY id DESC";
    $result = $conn->quary($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $db_data[] = $row;
        }
        
        //send back complite record as json
        echo json_encode($db_data);
    }else{
        echo("error");
    }
    $conn->close();
    return;
}


?>