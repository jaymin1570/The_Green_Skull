<?php

session_start();

if(isset($_SESSION['student_ID'])){
  header("location:/The_Green_Skull/mydetail/student_detail.php?id={$_SESSION['student_detail']}");
}
// header("location:/The_Green_Skull/mydetail/student_detail.php?id={$_SESSION['student_detail']}");

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>The Green Skull</title>
</head>

<body>
  

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">The Green Skull</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/The_Green_Skull/">Home <span class="sr-only">(current)</span></a>
            </li>
              <?php 
                
                if(isset($_SESSION['student_ID'])){?>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Student
                </a>
              
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/The_Green_Skull/mydetail/student_detail.php?id=<?php echo $_SESSION['student_detail'] ?>">My Details</a>
                    <a class="dropdown-item" href="#">My Attendance</a>
                    <a class="dropdown-item" target="_blank" href="/The_Green_Skull/Assignments/">My Assignments</a>
                    <div class="dropdown-divider"></div>
                    <a target="_blank" class="dropdown-item" href="/The_Green_Skull/result/chart.php?id=<?php echo $_SESSION['student_detail'] ?>">My Results</a>
                </div>
                <?php } ?>
            </li>
            <li class="nav-item">
                <a class="nav-link " target="_blank" href="/The_Green_Skull/sharedvideo/">Shared Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " target="_blank" href="/The_Green_Skull/shared_quetions/">Shared Quetions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " target="_blank" href="/The_Green_Skull/feedback/">Feedback</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="/The_Green_Skull/shared_problems/">Shared Problems</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link " href="/The_Green_Skull/studentsdetails.php">About</a>
            </li> -->
        </ul>

         <?php 
                 
                if(!isset($_SESSION['student_ID'])){?>

        <button class="btn btn-success my-2 my-sm-0 mx-2" data-toggle="modal" data-target="#login"
        >Login</button>

        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Student Login
                            Here</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/The_Green_Skull/login.php" method="POST">
                            <div class="form-group">
                                <label for="userid">User Id</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="userid" placeholder="Enter user id" required>
                                <small id="emailHelp" class="form-text
                                    text-muted">We'll never share your user id
                                    with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" name="password" required>
                            </div>

                            <button type="submit" name="login"class="btn btn-primary">Login</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <?php

                }else{
                    echo "<span >welcome,".$_SESSION['student_ID']."<span>";
                    ?>
                    <button class="btn btn-dark my-2 my-sm-0 mx-2"><a href="/The_Green_Skull/logout.php">Logout</a>
                    </button>
        <?php
         }
        ?>

    </div>
</nav>
  



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/jpeg/event1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/jpeg/event7.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/jpeg/event10.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <?php include_once('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>