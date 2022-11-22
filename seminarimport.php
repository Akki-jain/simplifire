<?php

if(!empty($_FILES['file']['name']))
{
       include 'connect.php';
       include 'connectdisplay.php';

 $total_row = count(file($_FILES['file']['tmp_name']));

 $file_location = str_replace("\\", "/", $_FILES['file']['tmp_name']);

 //$query_5='truncate table customer_table';
 //$statement = $connect->prepare($query_5);
 //$statement->execute();
 
 $arr=array();
 $count=0;
 $sql3="show tables";
 $result = mysqli_query($con,$sql3);
 while($table = mysqli_fetch_array($result))
 {
 	$arr[$count]=$table[0];
 	$count=$count+1;
 }

 $count1=0;
	 while($count1<=$count)
	 {
	 	if ($arr[$count1]==$filename_without_ext) 
	 	{
	 		$sql2='drop table '.$filename_without_ext.'';
	 		$statement1 = $connect->prepare($sql2);
	 		$statement1->execute();
	 		break;
	 	}
	 	else
	 	{
	 		$count1=$count1+1;
	 	}
	 }

 $sql1='create table '.$filename_without_ext.' as select * from test4';
 $statement1 = $connect->prepare($sql1);
 $statement1->execute();

 $query_1 = '
 LOAD DATA LOCAL INFILE "'.$file_location.'" IGNORE 
 INTO TABLE '.$filename_without_ext.'
 FIELDS TERMINATED BY "," 
 LINES TERMINATED BY "\r\n" 
 IGNORE 1 LINES 
 (@column1,@column2,@column3,@column4,@column5,@column6,@column7,@column8,@column9,@column10,@column11) 
 SET rejection_reason = @column1, name = @column2,  type = @column3, role = @column4, start = @column5, end = @column6, place = @column7, level = @column8, url = @column9, organizing_org = @column10, teacher = @column11
 ';

 $statement = $connect->prepare($query_1);

 $statement->execute();

 $query_2 = "
 SELECT MAX(name) as name FROM test4
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