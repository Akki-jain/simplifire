<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "testing";
// $servername = "simplifire.cbfoidnoojh7.us-east-1.rds.amazonaws.com";
// $username = "akshat";
// $password = "simplifire";
// $db = "simplifire";
try {
   
    $con = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>