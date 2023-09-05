<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>searched</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="search.php" method="GET">
    <input type="text" name="search" id="search" placeholder="Search by name">
    <input type="submit">
    <br><br>
</form>
    
</body>
</html>




<?php


    include 'connection.php';

    $search = $_GET['search'];


    $query = "SELECT * FROM about WHERE name = '$search'";

    $run = mysqli_query($con, $query);

    if(mysqli_num_rows($run) > 0){
        include 'listtable.php';
    } else{
        echo 'no data found';
    }


?>