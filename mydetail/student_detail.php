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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>My Details</title>

   

</head>

<body>

<?php include "../navbar.php";?>
    

    <?php 
    
    require("../connection.php")   
    ?>

      <?php

    if(isset($_GET['student'])){
        echo "url id".$_GET['student'];
    }
    

    // echo "welcome,".$_SESSION['student_Primary'];
    // echo "welcome".$_SESSION['student_detail'];

    ?>


    <!-- <div id="dialogBox" style="display: none;">
        <div id="chartContainer" class="dialog" style="height: 300px; width: 100%;"></div>
    </div> -->

    <div>
        <h2 class="text-center">My Detail</h2>
        <hr>
    </div>

    <?php
    $id=$_GET['id'];
        $sql = "SELECT * from StudentsDB where Primary_key={$id}";
        $result = mysqli_query($mysqli, $sql);
        $number = 1;
        if (mysqli_num_rows($result) > 0) {
        
            echo "<table class='table table-striped table-bordered '>
                    <thead class='align-items-center'>
                        <tr>
                            <th>NO.</th>
                            <th>Student Photo</th>
                            <th>Student Name</th>
                            <th>Enrollment</th>
                            <th>DOB</th>
                            <th>Current Sem</th>
                            <th>Moblile Number</th>
                            <th>Email ID</th>
                            <th>Result</th>
                            
                        </tr>
                    </thead>
                    <tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                                <td>". $number ."</td>
                                <td><img src='data:image/jpeg;base64,".base64_encode( $row['Photo'] )."' height='40px' width='40px' border='50%'/>.</td>
                                <td>" . $row['StudentName'] . "</td>
                                <td>" . $row['EnrollmentNumber'] . "</td>
                                <td>" . $row['DateOfBirth'] . "</td>
                                <td>" . $row['CurrentSem'] . "</td>
                                <td><a href='#'>" . $row['MobileNumber'] . "</a></td>
                                <td><a href='#'>" . $row['EmailID'] . "</a></td>
                                <td><a target='_blank' href='/The_Green_Skull/result/chart.php?id=".$row['Primary_key']."'><button class='btn btn-success'>Graph of Result</button></a></td>
                                
                            </tr>";
                  $number += 1;
            }
            echo  "</tbody>
                </table>";
        }else{
            echo "<p style='color:red;'>0 Record Found</p>";
        }
        echo "<hr>";
        ?>

  

   



    <?php include('../footer.php') ?>




 

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

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>