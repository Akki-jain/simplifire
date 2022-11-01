<?php

if(!empty($_FILES['file']['name']))
{
       include 'connect.php';

       $name=$_FILES["file"]["name"];
       $filename_without_ext = substr($name, 0, strrpos($name, ".")); 

 $connect = new PDO("mysql:host=localhost;dbname=testing;", "root", "", array(
        PDO::MYSQL_ATTR_LOCAL_INFILE => true,
    ));

 $total_row = count(file($_FILES['file']['tmp_name']));

 $file_location = str_replace("\\", "/", $_FILES['file']['tmp_name']);

 //$query_5='truncate table customer_table';
 //$statement = $connect->prepare($query_5);
 //$statement->execute();

//  $sql2='drop table '.$filename_without_ext.'';
//  $statement1 = $connect->prepare($sql2);
//  $statement1->execute();

 $sql1='create table '.$filename_without_ext.' as select * from test3';
 $statement1 = $connect->prepare($sql1);
 $statement1->execute();

 $query_1 = '
 LOAD DATA LOCAL INFILE "'.$file_location.'" IGNORE 
 INTO TABLE '.$filename_without_ext.'
 FIELDS TERMINATED BY "," 
 LINES TERMINATED BY "\r\n" 
 IGNORE 1 LINES 
 (@column1,@column2,@column3,@column4,@column5,@column6,@column7,@column8,@column9,@column10) 
 SET approver_com = @column1, name = @column2,  description = @column3, url = @column4, level = @column5, category = @column6, place = @column7, date = @column8, awarding_org = @column9, teacher = @column10';

 $statement = $connect->prepare($query_1);

 $statement->execute();

 $query_2 = "
 SELECT MAX(name) as name FROM test3
 ";

 $statement = $connect->prepare($query_2);

 $statement->execute();

 $result = $statement->fetchAll();

 $customer_id = 0;

 foreach($result as $row)
 {
  $customer_id = $row['name'];
 }


 $output = array(
  'success' => 'Total <b>'.$total_row.'</b> Data imported'
 );

 echo json_encode($output);
}

?>