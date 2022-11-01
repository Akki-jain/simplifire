<?php
require('fpdf.php');

$query1=$_POST['hidden2'];
$table=$_POST['hidden1'];
$colval=$_POST['hidden3'];
$name=$_POST['highlights1'];
$highlights1=$_POST['highlights2'];
$highlights2=$_POST['highlights3'];

if(isset($_POST['hidden4']))
{
    $start=$_POST['hidden4'];
}

if(isset($_POST['hidden5']))
{
    $end=$_POST['hidden5'];
}

if(isset($_POST['result']))
{
$arr1=$_POST['result'];
array_push($arr1,"teacher");
$arr2=array("approver_com","name","date","awarding_org","teacher");
$arr3=array("rejection_reason","name","type","organizing_org","teacher");
class PDF extends FPDF
{
// Page header
function Header()
{
    if(isset($_POST['hidden4']))
    {
        $start=$_POST['hidden4'];
    }

    if(isset($_POST['hidden5']))
    {
        $end=$_POST['hidden5'];
    }
    $this->Rect(5, 5, 200, 287, 'A');
    // Logo
    $this->Image('logo (1).png',10,15,38);
    // Arial bold 15
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
Class dbObj
{
    /* Database connection start */
    var $dbhost = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "testing";
    var $conn;
    function getConnstring() {
    $con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
    
    /* check connection */
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    } else {
    $this->conn = $con;
    }
    return $this->conn;
    }
}
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading1 = array('organized'=>'Organized By', 'name'=> 'Name', 'start'=> 'Start','end'=> 'End','role'=> 'Role','institute'=> 'Institute','duration'=> 'Duration','url'=> 'URL','type'=> 'Type','level'=> 'Level','teacher'=> 'Professor');
$display_heading2 = array('approver_com'=>'Approver Comment', 'name'=> 'Name', 'description'=> 'Description','url'=> 'URL','level'=> 'Level','category'=> 'Category','place'=> 'Place','date'=> 'Date','awarding_org'=> 'Awarding Organization','teacher'=> 'Professor');
$display_heading3 = array('rejection_reason'=>'Rejection Reason', 'name'=> 'Name', 'type'=> 'Type','role'=> 'Role','start'=> 'Start Date','end'=> 'End Date','place'=> 'Place','level'=> 'Level','url'=> 'URL','organizing_org'=> 'Organizing Organization','teacher'=> 'Professor');

$header = mysqli_query($connString, "SHOW columns FROM workshops");
$pdf = new PDF();
$arr=array();
$count=0;
?>
<?php
//$query=mysqli_query($connString, "SELECT * from conferences");
// while($row = mysqli_fetch_array($query))
// {
    // $check=0;
    // $mem=$row['teacher'];
    // if(count($arr)===0)
    //{
        // $counter=0;
        // $member=$mem;
        // $arr[$count]=$member;
        // $count=$count+1;
        //echo $member."1";
        //$query1=mysqli_query($connString, "SELECT email,gender,country from members where first_name='$member'");
        $pdf->AddPage();
        //foter page
        $pdf->AliasNbPages();
        $pdf->SetFont('Arial','B',15);
        // Move to the right
        $pdf->Cell(40);
        // // Title
        // $this->Cell(30,15,'Title',1,0,'C');
        // $this->Ln();
        // $this->Cell(30, 15, 'Line 2', 1, 0, 'C');
        // $pdf->Write(15,'CHRIST (Deemed to be University), Bangalore.', 'LRTB', 'C');
        // $pdf->Cell(55);
        // $pdf->Write(15,' Department: Computer Science, School of Sciences', 'LRTB', 'C');
        $pdf->multicell(140,10,'CHRIST (Deemed to be University), Bangalore. Department: Computer Science, School of Sciences', 'LRTB', 'C');
        $pdf->Cell(55);
        $pdf->SetFont('Times','BIU',15);
        $date_in = utf8_encode(strftime('%B %Y'));
        $date="Activity Report from ".$start." to ".$end;
        $pdf->Cell(110,10,$date,0,0,'C');
        // Line break
        $pdf->Ln(15);
        $pdf->SetFont('Arial','B',14);
        $pdf->Write(18,'A. HIGHLIGHTS',' http://www.fpdf.org');
        $pdf->SetFont('Arial','I',10);
        $pdf->Ln();
        $pdf->MultiCell(190, 2,"1. ".$highlights1);
        $pdf->Ln(4);
        $pdf->Ln();
        $pdf->MultiCell(190, 2,"2. ".$highlights2);
        $pdf->Ln(10);
        $pdf->SetFont('Arial','B',14);
        $pdf->Write(18,'B. PARTICIPATION',' http://www.fpdf.org');
        $pdf->Ln();
        $pdf->SetFont('Arial','BU',15);
        $pdf->Cell(60);
        $pdf->Cell(60,10,"Conferences",0,0,'C');
        $pdf->Ln(15);
        $result = mysqli_query($connString, "SELECT $colval,teacher from workshops where start>='$start' AND end<='$end'") or die("database error:". mysqli_error($connString));
        
        //header
        // $pdf->AddPage();
        // //foter page
        // $pdf->AliasNbPages();
        // $pdf->SetFont('Arial','B',12);
        $pdf->SetFont('Arial','B',10);
        foreach($arr1 as $heading) 
        {
            $pdf->Cell(38,12,$display_heading1[$heading],1,0,'C');
        }
        $pdf->SetFont('Arial','I',10);
        foreach($result as $row2) 
        {
            $pdf->Ln();
            foreach($row2 as $column) 
                $pdf->Cell(38,12,$column,1,0,'C');
        }
        // $pdf->SetFont('Arial','B',14);
        // $pdf->Write(18,'Analysis','http://www.fpdf.org');
        // $pdf->SetFont('Arial','I',10);
        // $pdf->Ln();
        // $res=mysqli_query($connString,"SELECT count(*) as val,organized FROM $table group by organized");
        // $st="1. Mr/Mrs attended ";
        // while($rows=mysqli_fetch_array($res))
        // {
        //     if($rows['val']==1)
        //     {
        //         $st=$st.$rows['val']." event organized by ".$rows['organized'].", ";
        //     }
        //     else
        //     {
        //         $st=$st.$rows['val']." events organized by ".$rows['organized'].", ";
        //     }
        // }
        // $st=substr($st,0,strlen($st)-2).".";
        // //$st= "1. Mr/Mrs ".$member." attended a total of ".$rows." events.";
        // $pdf->MultiCell(190, 6,$st );
    //}
    // else
    // {
    //     for($i=0;$i<$count;$i++)
    //     {
    //         if($arr[$i]==$mem)
    //         {
    //             $check=$check+1;
    //         }
    //     }
    //     if($check==0)
    //     {
    //         $member=$mem;
    //         $arr[$count]=$member;
    //         $count=$count+1;
    //         //echo $member."1";
    //         //$query1=mysqli_query($connString, "SELECT email,gender,country from members where first_name='$member'");

            //echo ("SELECT approver_com,name,date,awarding_org,teacher from awards where date>='$start' AND date<='$end'");
            $result = mysqli_query($connString, "SELECT approver_com,name,date,awarding_org,teacher from awards where date>='$start' AND date<='$end'") or die("database error:". mysqli_error($connString));
            
            //header
            $pdf->AddPage();
            //foter page
            $pdf->Ln(15);
            $pdf->SetFont('Arial','BU',15);
            $pdf->Cell(60);
            $pdf->Cell(60,10,"Awards",0,0,'C');
            $pdf->Ln(15);
            $pdf->AliasNbPages();
            $pdf->SetFont('Arial','B',9);
            foreach($arr2 as $heading) 
            {
                $pdf->Cell(38,12,$display_heading2[$heading],1,0,'C');
            }
            $pdf->SetFont('Arial','I',9);
            foreach($result as $row2) 
            {
                $pdf->Ln();
                foreach($row2 as $column) 
                    $pdf->Cell(38,12,$column,1,0,'C');
            }
            // $pdf->SetFont('Arial','B',14);
            // $pdf->Write(18,'Analysis',' http://www.fpdf.org');
            // $pdf->SetFont('Arial','I',10);
            // $pdf->Ln();
        //     $res=mysqli_query($connString,"SELECT count(*) as val,organized FROM $table where teacher='$member' group by organized");
        // $st="1. Mr/Mrs ".$member." attended ";
        // while($rows=mysqli_fetch_array($res))
        // {
        //     if($rows['val']==1)
        //     {
        //         $st=$st.$rows['val']." event organized by ".$rows['organized'].", ";
        //     }
        //     else
        //     {
        //         $st=$st.$rows['val']." events organized by ".$rows['organized'].", ";
        //     }
        // }
        // $st=substr($st,0,strlen($st)-2).".";
        // //$st= "1. Mr/Mrs ".$member." attended a total of ".$rows." events.";
        // $pdf->MultiCell(190, 6,$st );
    // }
        
    // }

// }

            $result = mysqli_query($connString, "SELECT rejection_reason,name,type,organizing_org,teacher from conference where start>='$start' AND end<='$end'") or die("database error:". mysqli_error($connString));
            
            //header
            $pdf->AddPage();
            //foter page
            $pdf->Ln(15);
            $pdf->SetFont('Arial','BU',15);
            $pdf->Cell(60);
            $pdf->Cell(60,10,"Workshops",0,0,'C');
            $pdf->Ln(15);
            $pdf->AliasNbPages();
            $pdf->SetFont('Arial','B',9);
            foreach($arr3 as $heading) 
            {
                $pdf->Cell(38,12,$display_heading3[$heading],1,0,'C');
            }
            $pdf->SetFont('Arial','I',9);
            foreach($result as $row2)                                                                                                                       
            {
                $pdf->Ln();
                foreach($row2 as $column) 
                    $pdf->Cell(38,12,$column,1,0,'C');
            }
?>
<?php
$pdf->Output();
?>







<?php
}
else
{
class PDF extends FPDF
{
// Page header
function Header()
{
    if(isset($_POST['hidden4']))
    {
        $start=$_POST['hidden4'];
    }

    if(isset($_POST['hidden5']))
    {
        $end=$_POST['hidden5'];
    }
    $this->Rect(5, 5, 200, 287, 'A');
    // Logo
    $this->Image('logo (1).png',10,15,38);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(40);
    // // Title
    // $this->Cell(30,15,'Title',1,0,'C');
    // $this->Ln();
    // $this->Cell(30, 15, 'Line 2', 1, 0, 'C');
    $this ->MultiCell(140,10,'CHRIST (Deemed to be University), Bangalore. Department: Computer Science, School of Sciences', 'LRTB', 'C', 0);
    $this->Cell(65);
    $this->SetFont('Times','BIU',15);
    $date_in = utf8_encode(strftime('%B %Y'));
    $date="Activity Report from ".$start." to ".$end;
    $this->Cell(120,10,$date,0,0,'C');
    // Line break
    $this->Ln(25);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
Class dbObj{
    /* Database connection start */
    var $dbhost = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "testing";
    var $conn;
    function getConnstring() {
    $con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
    
    /* check connection */
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    } else {
    $this->conn = $con;
    }
    return $this->conn;
    }
}
$db = new dbObj();
$connString =  $db->getConnstring();
$pdf = new PDF();
$arr=array();
$count=0;
?>
<?php
$query=mysqli_query($connString, "SELECT * from conference");
while($row = mysqli_fetch_array($query))
{
    $check=0;
    $mem=$row['teacher'];
    if(count($arr)===0)
    {
        $counter=0;
        $member=$mem;
        $arr[$count]=$member;
        $count=$count+1;
        //echo $member."1";
        //$query1=mysqli_query($connString, "SELECT email,gender,country from members where first_name='$member'");
        $pdf->AddPage();
        //foter page
        $pdf->AliasNbPages();
        $pdf->SetFont('Arial','BU',15);
        $pdf->Cell(60);
        $pdf->Cell(60,10,$member,1,0,'C');
        $pdf->Ln(10);
        //echo "SELECT * from $table where teacher='$member'";
        $result = mysqli_query($connString, "SELECT * from $table where teacher='$member'") or die("database error:". mysqli_error($connString));
        
        //header
        // $pdf->AddPage();
        // //foter page
        // $pdf->AliasNbPages();
        // $pdf->SetFont('Arial','B',12);
        $pdf->SetFont('Arial','I',12);
        while($result1 = mysqli_fetch_array($result))
            {
                $counter=$counter+1;
                $pdf->Ln(8);
                $str=$counter.". Mr/Mrs ".$member." attended the event organized by ".$result1['organized']." from ".$result1['start']." to ".$result1['end']." for ".$result1['duration']." days. It was a ".$result1['type']." at ".$result1['level']." level and Mr/Mrs ".$member." was part of it as a ".$result1['role'].".";
                $pdf->MultiCell(190, 6, $str);
            }
    }
    else
    {
        for($i=0;$i<$count;$i++)
        {
            if($arr[$i]==$mem)
            {
                $check=$check+1;
            }
        }
        if($check==0)
        {
            $counter=0;
            $member=$mem;
            $arr[$count]=$member;
            $count=$count+1;
            //echo $member."1";
            //$query1=mysqli_query($connString, "SELECT email,gender,country from members where first_name='$member'");
            //echo "SELECT * from book1 where teacher='$member'";
            $result = mysqli_query($connString, "SELECT * from $table where teacher='$member'") or die("database error:". mysqli_error($connString));
            
            //header
            $pdf->AddPage();
            //foter page
            $pdf->AliasNbPages();
            $pdf->SetFont('Arial','BU',15);
            $pdf->Cell(60);
            $pdf->Cell(60,10,$member,1,0,'C');
            $pdf->Ln(10);
            $pdf->SetFont('Arial','I',12);
            while($result1 = mysqli_fetch_array($result)) 
            {
                $counter=$counter+1;
                $pdf->Ln(8);
                $str=$counter.". Mr/Mrs ".$member." attended the event organized by ".$result1['organized']." from ".$result1['start']." to ".$result1['end']." for ".$result1['duration']." days. It was a ".$result1['type']." at ".$result1['level']." level and Mr/Mrs ".$member." was part of it as a ".$result1['role'].".";
                $pdf->MultiCell(190, 6, $str);
            }
        }
    }
}
$pdf->Output();
}
    ?> 
