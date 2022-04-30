<?php
$update = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);


if(!$con){
    die("connection failed". mysqli_connect_error());
}

 echo "connect Success";


$problem = $_POST["problem"];
$link = $_POST["link"];
$type = $_POST["type"];
$approach = $_POST["approach"];
$time_complexity = $_POST["time-complexity"];
$space_complexity = $_POST["space-complexity"];
$status = $_POST["status"];
$level = $_POST["level"];
$id = 1;
/*
UPDATE table_name
SET column1 = value1, column2 = value2...., columnN = valueN
WHERE [condition];
*/


/*
problem          
link
type
approach
time_complexity
space_complexity
status
id
level
*/


$sql = "UPDATE `dsa_tracker`.`track` SET `problem` = '$problem', `link` = '$link', `type` = '$type', `approach` = '$approach', `time_complexity` = '$time_complexity', `space_complexity` = '$space_complexity', `status` = '$status', `level` = '$level' WHERE `id` = $id";

echo "query : " . $sql;

if($con->query($sql)){
    echo "win";
    $update = true;
}
else{
    echo "error $sql <br> $con->error";
}

$con->close();
}
?>