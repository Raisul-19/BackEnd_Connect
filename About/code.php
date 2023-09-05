<?php


    include 'connection.php';



    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $district = $_POST['district'];

    $query = "INSERT INTO about(name, phone, district) VALUES('$name', '$phone', '$district')";

    $run = mysqli_query($con, $query);

    if(!$run){
        echo "Submission failed!";
    } else{
        header('location: table.php');
    }


?>