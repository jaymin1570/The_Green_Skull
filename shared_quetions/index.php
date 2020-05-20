<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

 <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Shared Quetions</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
    
  </head>
  <body class="bg-light">

  <?php include "../navbar.php"; ?>


    <main role="main" class="container">


      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="img/quetions.jpg" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100">Shared Quetions</h6>
          <small>year 2020-21</small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Imp Quetions</h6>

<?php 

 require("../connection.php") ;

$sql = "SELECT * from QuetionsDB where Category='imp'";
        $result = mysqli_query($mysqli, $sql);
        $number = 1;
        if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_assoc($result)) {

?>


        <div class="media text-muted pt-3">
          <!-- <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded"> -->
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <span class="text-gray-dark"> By <a href=""> <?php echo  $row['Faculty_name'];  ?></a> on <a href=""><?php echo $row['Date'];  ?></a>  </span>
              <a href="#"> <?php echo  $row['Subject'];  ?></a>
              
            </div>
            <h6 class="d-block"><?php echo  $row['Quetions'];  ?></h6>
          </div>
        </div>
       
        
      <?php
      }}
      ?>
        
        <small class="d-block text-right mt-3">
          <a href="#">All Quetions</a>
        </small>
      </div>

      

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">GTU Quetions</h6>

<?php 

 require("../connection.php") ;

$sql = "SELECT * from QuetionsDB where Category='gtu'";
        $result = mysqli_query($mysqli, $sql);
        $number = 1;
        if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_assoc($result)) {

?>


        <div class="media text-muted pt-3">
          <!-- <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded"> -->
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <span class="text-gray-dark"> By <a href=""><?php echo  $row['Faculty_name'];  ?></a>  on <a href=""><?php echo $row['Date'];  ?> </a></span>
              <a href="#"> <?php echo  $row['Subject'];  ?></a>
              
            </div>
            <h6 class="d-block"><?php echo  $row['Quetions'];  ?></h6>
          </div>
        </div>
       
        
      <?php
      }}
      ?>
        
        <small class="d-block text-right mt-3">
          <a href="#">All Quetions</a>
        </small>
      </div>






      
    </main>

  <?php include "../footer.php"; ?>




      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="js/offcanvas.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>