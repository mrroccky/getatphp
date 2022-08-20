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

/*$cnd = " SELECT * FROM
(
 SELECT * FROM saynaa_jobs ORDER BY id DESC LIMIT 2
) AS sub
ORDER BY id ASC ";
*/

$cnd = "SELECT
  saynaa_jobs.id,
  saynaa_jobs.publisher_id,
  saynaa_jobs.image,
  saynaa_jobs.head_line,
  saynaa_jobs.job_type,
  saynaa_jobs.job_location,
  saynaa_jobs.salary_offred ,
  saynaa_jobs.permanent,
  saynaa_jobs.job_descreption,
  saynaa_jobs.contact,
  saynaa_jobs_publisher.image AS publisher_image,
  saynaa_jobs_publisher.name AS publisher_name
FROM saynaa_jobs , saynaa_jobs_publisher
WHERE saynaa_jobs.publisher_id =saynaa_jobs_publisher.publisher_id ORDER BY id DESC LIMIT 20";
$query = mysqli_query($connection,$cnd);
$result = array();

while($fetchData=$query->fetch_assoc()){
	$result[]=$fetchData;
}
	echo json_encode($result)


//for getcourses 
    //image
    //best cources
    //description
   

    //for jobs
    //id
    //publisher_id
    // jobImage
    //jobHeadlineTital
    //jobtype
    //job Location
    //payment
    //permanent or contract based
    //full job descripton
    // applay link

?>
 