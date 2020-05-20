<?php

include "config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt = $db->prepare("SELECT * FROM AssignmentsDB where Primary_key=?") or die("query filed");

    $stmt -> bindParam(1,$id);
    $stmt -> execute();
    while($data = $stmt -> fetch()){   
    $file = "media/".$data['AssignmentFile'];  
    }
    if(file_exists($file)){
      header("content-disposition:attechment; filename=".basename($file));
      readfile($file);
      exit;
    }
}

?>