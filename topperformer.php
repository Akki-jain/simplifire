<?php
	include 'connect.php';

	$arr=array();
	$count=0;
	$query=mysqli_query($con, "SELECT DISTINCT(teacher) from conferences");
	while($row = mysqli_fetch_array($query))
	{
	    $arr[$count]=$row[0];
	    $count=$count+1;
	}

	$types=array("Institutional","Regional","National","International");
	$points=array(0.5,1.5,2,3);
	$scores=array(0,0,0,0);
	$docs=array("workshops","conferences","awards");

	for($k=0;$k<sizeof($docs);$k++)
	{
		for($i=0;$i<sizeof($arr);$i++)
		{
			$total=0;
			for($j=0;$j<sizeof($types);$j++)
			{
				$count=0;
				$result=mysqli_query($con, "SELECT * from $docs[$k] where level='$types[$j]' and teacher = '$arr[$i]'");

				while($row=mysqli_fetch_array($result))
				{
					$count=$count+1;
				}
				$total=$total+($points[$j]*$count);
			}
			$scores[$i]=$scores[$i]+$total;
		}
	}


	$types=array("Solo","Collaborative","Departmental","Institutional");
	$points=array(2,3,4,5);
	for($i=0;$i<sizeof($arr);$i++)
	{
		$total=0;
		for($j=0;$j<sizeof($types);$j++)
		{
			$count=0;
			$result=mysqli_query($con, "SELECT * from consultancy where type='$types[$j]' and teacher = '$arr[$i]'");

			while($row=mysqli_fetch_array($result))
			{
				$count=$count+1;
			}
			$total=$total+($points[$j]*$count);
		}
		$scores[$i]=$scores[$i]+$total;
	}


	for($i=0;$i<sizeof($scores)-1;$i++)
	{
		if($scores[$i]>$scores[$i+1])
		{
			$temp=$scores[$i+1];
			$scores[$i+1]=$scores[$i];
			$scores[$i]=$temp;

			$temp=$arr[$i+1];
			$arr[$i+1]=$arr[$i];
			$arr[$i]=$temp;
			$i=-1;
		}
	}

	echo "Top Performers by Ranking:: <br><br>";
	for($i=sizeof($scores)-1;$i>=0;$i--)
	{
		echo($arr[$i]." ".(string)$scores[$i]."<br>");
	}



?>