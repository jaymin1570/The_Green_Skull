

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

    <title>Students Details</title>

   

</head>

<body>
    

    <?php 

    
    include_once('navbar.php');
    
    require("connection.php")   
    ?>


    <!-- <div id="dialogBox" style="display: none;">
        <div id="chartContainer" class="dialog" style="height: 300px; width: 100%;"></div>
    </div> -->

    <?php

    if(isset($_GET['student'])){
        echo "url id".$_GET['student'];
    }
    

    echo "welcome,".$_SESSION['student_ID'];

    ?>

    

    <div>
        <h2 class="text-center">Students Information</h2>
    </div>

    <?php
        $sql = "select * from StudentsDB";
        $result = mysqli_query($mysqli, $sql);
        $number = 1;
        if (mysqli_num_rows($result) > 0) {
        
            echo "<table class='table table-striped table-bordered table-dark'>
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
                                <td><a href='/The_Green_Skull/result/chart.php?id=".$row['Primary_key']."'><button class='btn btn-success'>Graph of Result</button></a></td>
                                
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

  

   



    <?php include('footer.php') ?>




 

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

// <!-- <th>10th Result</th>
// <th>12th Result</th>
// <th>Sem1 Result</th>
// <th>Sem2 Result</th>
// <th>Sem3 Result</th>
// <th>Sem4 Result</th>
// <th>Sem5 Result</th>
// <th>Sem6 Result</th>
// <th>Sem7 Result</th>
// <th>Sem8 Result</th> -->


// <!-- <td>" . $row['Result_10th'] . "</td>
// <td>" . $row['Result_12th'] . "</td>
// <td>" . $row['ResultSem1'] . "</td>
// <td>" . $row['ResultSem2'] . "</td>
// <td>" . $row['ResultSem3'] . "</td>
// <td>" . $row['ResultSem4'] . "</td>
// <td>" . $row['ResultSem5'] . "</td>
// <td>" . $row['ResultSem6'] . "</td>
// <td>" . $row['ResultSem7'] . "</td>
// <td>" . $row['ResultSem8'] . "</td> -->