<div class="modal fade" id=<?php echo "staticBackdrop".$data["id"] ?> data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <input class="form-control" id="problem" type="text" name="problem" value=<?php echo $data['problem']?>>
                    </div>
                    
                    <div class="mb-3">
                        <label for="link" class="form-label">Problem Link</label>
                        <input class="form-control" id="link" type="text" name="link" value=<?php echo $data['problem']?>>
                    </div>
    
                    <div class="mb-3">
                        <label for="type" class="form-label">Problem Type</label>
                        <input class="form-control" id="type" type="text" name="type" value=<?php echo $data['type']?>>
                    </div>
    
                    <div class="mb-3">
                        <label for="approach" class="form-label">Problem Approach</label>
                        <textarea class="form-control" id="approach" name="approach" >
                        <?php echo $data['approach']?>
                        </textarea>
                    </div>
    
                    <div class="mb-3">
                        <label for="time-complexity" class="form-label">Time Complexity</label>
                        <input class="form-control" id="time-complexity" type="text" name="time-complexity" value=<?php echo $data['time_complexity']?>>
                    </div>
    
                    <div class="mb-3">
                        <label for="space-complexity" class="form-label">Space Complexity</label>
                        <input class="form-control" id="space-complexity" type="text" name="space-complexity" value=<?php echo $data['space_complexity']?>>
                    </div>
    
                    <label for="select-status">Problem Status</label>
                    <select class="form-select form-control mb-3" id="select-status" name="status">
                        <option <?php if($data['status'] == "To-do") echo "selected" ?> value="To-do">To-do</option>
                        <option <?php if($data['status'] == "Doing") echo "selected" ?> value="Doing">Doing</option>
                        <option <?php if($data['status'] == "Done") echo "selected" ?> value="Done">Done</option>
                        <option <?php if($data['status'] == "Revise") echo "selected" ?> value="Revise">Revise</option>
                    </select>
    
                    <label for="select-level">Problem Level</label>
                    <select class="form-select form-control mb-3" id="select-level" name="level">
                        <option <?php if($data['level'] == "Easy") echo "selected" ?> value="Easy">Easy</option>
                        <option <?php if($data['level'] == "Medium") echo "selected" ?> value="Medium">Medium</option>
                        <option <?php if($data['level'] == "Hard") echo "selected" ?> value="Hard">Hard</option>
                    </select>
    
                    <button type="submit" class="btn btn-primary" name="submit" value=<?php echo $data['id']?> >Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

