<?php

session_start();

if(!isset($_SESSION['student_ID'])){
    header("location:/The_Green_Skull/");
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>File to Download</title>
  </head>
  <body>

  <?php include "../navbar.php";?>
    <div class="container">
    <h2 class="text-center my-2">Assignment Files</h2>
    <hr>
    <table class="table table-bordered table-striped my-4">
    <thead>
    <tr class="text-center">
    <th>ID</th>
    <th>Faculty Name</th>
    <th>Semester</th>
    <th>Assignment Name</th>
    <th>Due Date</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include "config.php";
    $stmt  = $db->prepare("SELECT * from AssignmentsDB");
    $stmt -> execute() or die("query filedsddddsss");
    while($row = $stmt -> fetch()){
      
    ?>
    <tr>
    <td class="text-center"><?php echo $row['Primary_key'] ?> </td>
    <td class="text-center"><?php echo $row['FacultyName'] ?> </td>
    <td class="text-center"><?php echo $row['Sem'] ?> </td>
    <td class="text-center"><?php echo $row['AssignmentName'] ?> </td>
    <td class="text-center"><?php echo $row['DueDate'] ?> </td>
    <td class="text-center"><a href="download.php?id=<?php echo $row['Primary_key'] ?> " class="btn btn-outline-primary">Download Now</a></td>
    
    
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
    </div>

    <?php include "../footer.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>