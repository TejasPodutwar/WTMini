<?php
$update = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['submit'])){
    $server = "localhost";
    $username = "root";
    $password = "Tejasgp85";

    $con = mysqli_connect($server, $username, $password);


    if(!$con){
        die("connection failed". mysqli_connect_error());
    }


    $problem = $_POST["problem"];
    $link = $_POST["link"];
    $type = $_POST["type"];
    $approach = $_POST["approach"];
    $time_complexity = $_POST["time-complexity"];
    $space_complexity = $_POST["space-complexity"];
    $status = $_POST["status"];
    $level = $_POST["level"];
    $id = $_POST["submit"];


    if($id !=-1){
        $sql = "UPDATE `dsa_tracker`.`track` SET `problem` = '$problem', `link` = '$link', `type` = '$type', `approach` = '$approach', `time_complexity` = '$time_complexity', `space_complexity` = '$space_complexity', `status` = '$status', `level` = '$level' WHERE `id` = $id";

        if($con->query($sql)){
            $update = true;
        }
        else{
            echo "error $sql <br> $con->error";
        }

        $con->close();
        }
    }
    }

?>