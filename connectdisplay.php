<?php

$name=$_FILES["file"]["name"];
       $filename_without_ext = substr($name, 0, strrpos($name, ".")); 

 $connect = new PDO("mysql:host=localhost;dbname=testing;", "root", "", array(
        PDO::MYSQL_ATTR_LOCAL_INFILE => true,
    ));
?>