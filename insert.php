<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $servername="localhost";
        $username="root";
        $password="nerf";
        $dbname="dsa_tracker";
        $table="track";
    
        $con = new mysqli($servername, $username, $password, $dbname);
    
        $problem = $_POST["problem"];
        $link = $_POST["link"];
        $type = $_POST["type"];
        $approach = $_POST["approach"];
        $time_complexity = $_POST["time-complexity"];
        $space_complexity = $_POST["space-complexity"];
        $status = $_POST["status"];
        $level = $_POST["level"];
    
        $insert = $_POST["insert"];
        echo "$insert";
        if($con->connect_error){
            echo "<script>alert('Connection Error');</script>";
        }
        echo $insert;
        if($insert == TRUE){
            echo "hello";
            $sqlinsert = "INSERT INTO $table(problem, link, type, approach, time_complexity, space_complexity, status, level) VALUES('$problem', '$link', '$type', '$approach', '$time_complexity', '$space_complexity', '$status', '$level')";
            echo "hello";
            if(!($con->query($sqlinsert) == TRUE)){
                echo "<script>alert('Record Insertion Failed, please check Data Types');</script>";
            }
        }
    }
?>