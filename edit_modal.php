<html>
    <head><title>Test</title></head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <body>

    <?php include 'update.php';?>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add New Problem
        </button>
        
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Problem Information</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> 
                    <div class="modal-body">
                        <form action="update.php" method="post">
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
            
                            <button type="submit" name="update" value="update" class="btn btn-primary">Submit</button>
                            <?php
         
                            if($update == true){
                            echo "Thanks for submitting your form. We are happy to see you joining us for the US trip";
                            }
                            ?> 
                          </form>
                    </div>
                  </div>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    
</head>
<body>
   <img class="bg" src="bg.jpg" alt="Aurora"> 
    <div class="container">
        <h1>Welcome to Winter Trip form</h1>
            <p>Enter your details and submit this form to confirm your participation in the trip </p>
           
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="text" name="age" id="age" placeholder="Enter your Age">
                <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <input type="tel" name="phone" id="phone" placeholder="Enter your phone">
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
                <button class="btn">Submit</button>
            </form>
    </div>
    <script src="index.js"></script>

</body>
</html> -->