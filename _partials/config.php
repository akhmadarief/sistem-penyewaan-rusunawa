<?php
    $conn = new mysqli("rusunawa.reg.my.id", "rusunawa", "qwerty123", "rusunawa");

    if ($conn->connect_error){
        exit('Error connecting to database');
    }
?>