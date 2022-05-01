<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <title>DSA Tracker</title>
  </head>
  <body>
    <?php include 'edit.php'?>
    <?php include 'insert.php';?>
    <?php include 'delete.php';?>

    <?php 
      $mysqli = new mysqli('localhost','root','nerf','dsa_tracker') or die(mysqli_error($mysqli));
      $result = $mysqli->query("SELECT * FROM track") or die($mysqli->error);
    ?>

    
    <header>
      <h2 id="dsa_logo">DSA Tracker</h2>
    </header>
    <div class="container">
      <div class="mt-5 mb-4">
        <button type="button" class="btn-purple" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add New Problem
        </button>
      </div>
      <div class="my-5">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Sr. No</th>
              <th>Problem</th>
              <th>Type</th>
              <th>Status</th>
              <th>Link</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php $sr_no = 1;?>
            <?php while($row = $result->fetch_assoc()):?>
              <?php $data=$row;include("modal.php");?>
              <tr>
                <th><?php echo $sr_no++ ?></th>
                <td><?php echo $row['problem']?></td>
                <td><?php echo $row['type']?></td>
                <td>
                  <?php echo $row['status']?>
                </td>
                <td style="width: 10vw">
                  <a class="view-btn" target="_blank" href=<?php echo $row['link']?>> View Problem </a>
                </td>
                <td>
                  <span class="icon_fas" type="button" data-bs-toggle="modal" data-bs-target=<?php echo "#staticBackdrop".$row["id"] ?>>
                    <i class="fa-solid fa-pencil"></i>
                  </span>
                  <span class="icon_fas">
                    <form style="display: inline;" method="post" action="index.php"><button style="display: inline;padding: 0;border: none;background: none;" name="delete" value=<?php echo $row["id"] ?> type="submit"><i class="fa-solid fa-trash"></i></button></form>
                  </span>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
