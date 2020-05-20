<?php

include "connection.php";


if(isset($_POST['login'])){
    $id = mysqli_real_escape_string($mysqli,$_POST['userid']);
    $pass = mysqli_real_escape_string($mysqli,$_POST['password']);

$sql = "SELECT * from StudentsLoginDB where student_ID='{$id}' and student_pwd='{$pass}'";
$result = mysqli_query($mysqli,$sql);


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

        session_start();
        $_SESSION['student_ID'] = $row['student_ID'];
        $_SESSION['student_Primary'] = $row['Primary_key'];
        $_SESSION['student_detail'] = $row['student_detail'];

        header("location:/The_Green_Skull/mydetail/student_detail.php?id={$_SESSION['student_detail']}");

    }

}else{
    echo "<div class='alert alert-danger'>Username and password not match</div>";
}

}

?>