<?php

    include 'connection.php';

    $name = $_POST['name'];
    $id = $_POST['id'];
    $section = $_POST['section'];
    $batch = $_POST['batch'];

    $query = "INSERT INTO info(name, sid, section, batch) 
                VALUES('$name', '$id', '$section', '$batch')";
    
    $run = mysqli_query($con, $query);

    if(!$run){
        echo "submission failed";
    } else{
        header('location: list.php');
    }

?>