<?php

        include('connect.php');

        $name=$_POST['name'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $message=$_POST['message'];


        $sql1 = "INSERT INTO contact VALUES ('$name','$lname','$email','$message')";

        if ($con->query($sql1) === TRUE) 
        {
                echo "<script>alert('Message Received Successfully')</script>";
                include 'index.php';
        } 
        else 
        {
        echo "Error: " . $sql . "<br>" . $con->error;
        }
?>