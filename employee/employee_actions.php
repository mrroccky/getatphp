<?php

$servrName ="localhost";
$username ="root";
$password ="";
$dbname ="saynadb";
$table ="mployee";//create table for this name

//this action we get from app like post
$action =$_POST["action"];
//$action ='GET_ALL';
//create connection hare
$conn = new mysqli($servrName,$username,$password,$dbname);

//check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
//if connection ok

if ("CREATE_TABLE ==$action") {
    $sql = "CREATE TABLE IF NOT EXISTS $table (id INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    frist_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,";
if ($conn->query($sql)==TRUE) {
    echo("sucsess");
}else{
    echo("error");
}
$conn->close();
return;
}

//actions to get all employee records from database

if ("GET_ALL" == $action) {
    $db_data =array();
    $sql = "SELECT id , frist_name, last_name from $table ORDER BY id DESC";
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
//add employee action 

if ("ADD_EMP" == $action) {
    
    $frist_name = $_POST[$frist_name];
    $last_name = $_POST[last_name];
    $sql ="INSERN INTO $table ($frist_name , $last_name)";
    $result =$conn->query($sql);
    echo("sucsses");
    $conn->close();
    return;
}

//update employee action

if ("UPDATE_EMP" == $action) {
    $emp_id = $_POST[$emp_id];
    $frist_name = $_POST[$frist_name];
    $last_name = $_POST[$last_name];
    $sql = "INSERT INTO $table SET frist_name = '$frist_name',last_name ='$last_name' WHERE id ='$emp_id' ";
    if ($conn->query($sql) == TRUE) {
        echo("Sucsess");
    }else{
        echo('Erorr');
    }
    $conn->close();
    return;
}

//Delate employee
if ("DELATE_EMP" == $action) {
    $emp_id = $_POST[$emp_id];
    $sql = "DELETE FROM $table WHERE id = $emp_id";
    if ($conn->query($sql) == TRUE) {
        echo("Sucsess");
    }else{
        echo("erorr");
    }
    $conn->close();
    return;
} 

?>