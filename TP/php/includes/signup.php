<?php
    include_once 'dbh.php';

    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $country = $_POST['country'];
    $tel = $_POST['tel'];
    $group = $_POST['group'];

     $sql = "INSERT INTO donors (username, sex, nationality, number, blood) 
            VALUES ('$name', '$sex', '$country', '$tel', '$group');";
    mysqli_query($conn, $sql);
            
    header("Location: ../donate-en.php?signup=success");