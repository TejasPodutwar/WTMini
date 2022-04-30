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


// $problem = $_POST['problem'];
// $link = $_POST['link'];
// $type = $_POST['type'];
// $approach = $_POST['approach'];
// $time_complexity = $_POST['time_complexity'];
// $space_complexity = $_POST['space_complexity'];
// $status = $_POST['status'];
// $id = $_POST['id'];
// $level = $_POST['level'];

$problem = $_POST["problem"];
$link = $_POST["link"];
$type = $_POST["type"];
$approach = $_POST["approach"];
$time_complexity = $_POST["time-complexity"];
$space_complexity = $_POST["space-complexity"];
$status = $_POST["status"];
$level = $_POST["level"];

/*
UPDATE table_name
SET column1 = value1, column2 = value2...., columnN = valueN
WHERE [condition];
*/

/*
insert into track 
values("4sum", "https://leetcode.com/problems/4sum/", "ARRAY", "Recursively call nsum", "O(n^3)", "O(n)", "Done", 1, "Medium");
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

//$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

$sql = "UPDATE `dsa_tracker`.`track` SET `problem` = '$problem', `link` = '$link', `type` = '$type', `approach` = '$approach', `time_complexity` = '$time_complexity', `space_complexity` = '$space_complexity', `status` = '$status', `id` = 1, `level` = '$level'";

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