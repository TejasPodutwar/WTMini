<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if( isset($_POST['delete']) ){
        $servername="localhost";
        $username="root";
        $password="nerf";
        $dbname="dsa_tracker";
        $table="track";
        $id=$_POST["delete"];
        $con = new mysqli($servername, $username, $password, $dbname);
        if($con->connect_error){
            echo "<script>alert('Connection Error');</script>";
        }
    
    
        $sqldelete = "DELETE FROM ".$table." WHERE id=".$id;
    
        if(!($con->query($sqldelete) == TRUE)){
            echo "<script>alert('Record Deletion Failed, please check Data Types');</script>";
        }
    }


    }
    
?>



