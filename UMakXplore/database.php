<?php

$username = "root";
$password = "";
$database = "umakversedb";

$conn = mysqli_connect("localhost", $username, $password);
mysqli_select_db($conn, $database) or die("Unabale to select database");


$resultBldg = mysqli_query($conn, "SELECT * FROM building ORDER BY 
    CASE 
        WHEN name = 'Admin Building' THEN 1 
        WHEN name = 'Health and Physical Science Building' THEN 2 
        ELSE 3 
    END, name ASC");



?>