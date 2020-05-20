<?php

session_start();

if(!isset($_SESSION['student_ID'])){
    header("location:/The_Green_Skull/");
}
    require('../connection.php');
    $id=$_GET['id'];
    // echo $id;
    $sql = "SELECT * from StudentsDB where Primary_key=$id";
        $result = mysqli_query($mysqli, $sql) or die("query failed");
        $number = 1;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               
    ?>
<html>

<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>My Result</title>
</head>

<body>

<?php include "../navbar.php"; ?>

<h2 class="text-center">My Result Chart</h2>
<hr>


<div class="container">
    
    <div id="top_x_div" style="width: 200px; height: 400px;"></div>
 </div>
 <div class="my-2">
    <?php include "../footer.php"; ?>
    </div>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {

        var data = new google.visualization.arrayToDataTable([
            ['Semester', 'SPI'],
            ["10th Result", <?php 
            $value=$row['Result_10th'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['Result_10th']/10;
            }
            ?> ],
            ["12th Result", <?php 
            $value=$row['Result_12th'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['Result_12th']/10;
            }
            ?>],
            ["Semester 1", <?php 
            $value=$row['ResultSem1'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['ResultSem1'];
            }
            ?>],
            ["Semester 2", <?php 
            $value=$row['ResultSem2'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['ResultSem2'];
            }
            ?>],
            ["Semester 3", <?php 
            $value=$row['ResultSem3'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['ResultSem3'];
            }
            ?>],
            ["Semester 4", <?php 
            $value=$row['ResultSem4'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['ResultSem4'];
            }
            ?>],
            ["Semester 5", <?php 
            $value=$row['ResultSem5'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['ResultSem5'];
            }
            ?>],
            ["Semester 6", <?php 
            $value=$row['ResultSem6'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['ResultSem6'];
            }
            ?>],
            ["Semester 7",<?php 
            $value=$row['ResultSem7'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['ResultSem7'];
            }
            ?>],
            ["Semester 8",<?php 
            $value=$row['ResultSem8'];
            if($value==null){
                echo $value=0;
            }
            else{
                echo $value=$row['ResultSem8'];
            }
            ?>],

        ]);


        var options = {
            width: 800,
            legend: {
                position: 'none'
            },
            chart: {
                title: 'Semester Result analysis (in SPI)',
                subtitle: "Current Sem - <?php echo $row['CurrentSem']?>"
            },
            axes: {
                x: {
                    0: {
                        side: 'bottom',
                        label: "<?php echo $row['StudentName'];?> - (<?php echo $row['EnrollmentNumber'];?>)",
                        
                    } // Top x-axis.
                }
            },
            bar: {
                groupWidth: "90%"
            }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
    };
    </script>
<?php 
            
    }}?>

   



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



