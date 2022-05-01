<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submit'])){
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
        
            $insert = $_POST["submit"];
            if($con->connect_error){
                echo "<script>alert('Connection Error');</script>";
            }
    
            if($insert == -1){
                $sqlinsert = "INSERT INTO $table(problem, link, type, approach, time_complexity, space_complexity, status, level) VALUES('$problem', '$link', '$type', '$approach', '$time_complexity', '$space_complexity', '$status', '$level')";
                if(!($con->query($sqlinsert) == TRUE)){
                    echo "<script>alert('Record Insertion Failed, please check Data Types');</script>";
                }
            }
        }

    }
?>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Problem Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            <div class="modal-body">
                <form action="index.php" method="post">
                    <div class="mb-4">
                        <label for="problem" class="form-label">Problem Statement</label>
                        <input class="form-control" id="problem" type="text" name="problem">
                    </div>
                    
                    <div class="mb-3">
                        <label for="link" class="form-label">Problem Link</label>
                        <input class="form-control" id="link" type="text" name="link">
                    </div>
    
                    <div class="mb-3">
                        <label for="type" class="form-label">Problem Type</label>
                        <input class="form-control" id="type" type="text" name="type">
                    </div>
    
                    <div class="mb-3">
                        <label for="approach" class="form-label">Problem Approach</label>
                        <textarea class="form-control" id="approach" name="approach"></textarea>
                    </div>
    
                    <div class="mb-3">
                        <label for="time-complexity" class="form-label">Time Complexity</label>
                        <input class="form-control" id="time-complexity" type="text" name="time-complexity">
                    </div>
    
                    <div class="mb-3">
                        <label for="space-complexity" class="form-label">Space Complexity</label>
                        <input class="form-control" id="space-complexity" type="text" name="space-complexity">
                    </div>
    
                    <label for="select-status">Problem Status</label>
                    <select class="form-select form-control mb-3" id="select-status" name="status">
                        <option selected value="To-do">To-do</option>
                        <option value="Doing">Doing</option>
                        <option value="Done">Done</option>
                        <option value="Revise">Revise</option>
                    </select>
    
                    <label for="select-level">Problem Level</label>
                    <select class="form-select form-control mb-3" id="select-level" name="level">
                        <option selected value="Easy">Easy</option>
                        <option value="Medium">Medium</option>
                        <option value="Hard">Hard</option>
                    </select>
    
                    <button type="submit" name="submit" value="-1" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</div>


