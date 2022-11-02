<?php
    $arr=[];
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Simplifire | Consultancy</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

  </head>

<body>

<?php include 'header.php'?>
<br><br><br><br><br><br><br>


<form action="consultancy.php" method="post" style="margin-left:75px;"> 
    <input list="valueToSearch" name="valueToSearch" placeholder="Organised By" class="inputfield" style="border-radius:10px;">
            <datalist id="valueToSearch">
                <option value=""></option>
                <option value="Microsoft" >Microsoft</option>
                <option value="Google" >Google</option>
                <option value="Amazon" >Amazon</option>
                <option value="Meta" >Meta</option>
                <option value="Lenovo" >Lenovo</option>
                <option value="Accenture" >Accenture</option>
            </datalist>

    <input type="Date" name="start" placeholder="Start" class="inputfield" style="width:160px; border-radius:10px;">
    <input type="Date" name="end" placeholder="End" class="inputfield" style="width:160px; border-radius:10px;">

    <input list="valueToSearch2" name="valueToSearch2" placeholder="Type" class="inputfield" style="width:80px;">
            <datalist id="valueToSearch2">
                <option value=""></option>
                <option value="Articles in periodicals">Articles in periodicals</option>
                <option value="Articles in Journals">Articles in Journals</option>
                <option value="Conference/Seminar/Symposium">Conference/Seminar/Symposium</option>
                <option value="Workshop/FDP/Training Programme">Workshop/FDP/Training Programme</option>
                <option value="Awards/Achievments/others">Awards/Achievments/others</option>
            </datalist>

    <!-- <label for="tables">&emsp;&emsp;Choose the Document </label> -->
    <select class="inputfield" id="tables" name="table" placeholder="Choose the Document" style="width:200px;">
    <option value="" disabled selected style="color:gray;">Choose a Document</option>
    <?php
        include('connect.php');
        $quer="show tables";
        $result = mysqli_query($con,$quer);
        while($table = mysqli_fetch_array($result))
        {
            if(($table[0]<>"test1")AND(($table[0]<>"test2"))AND(($table[0]<>"test3"))AND(($table[0]<>"test4")))
                {
                $quer1="show columns from ".$table[0];
                $result1 = mysqli_query($con,$quer1);
                while($field = mysqli_fetch_array($result1))
                {
                    if($field[0]=="organized")
                    {
                        $val=$table[0];
            ?>
                <option value="<?php echo($val)??''; ?>"><?php echo($val)??''; ?></option>
        <?php }}}
    }

        ?>
    </select>

<div class="checkbox-dropdown" style="margin-left:10px;">
  What columns do you want to see?
  <ul class="checkbox-dropdown-list">
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="topic" />Topic</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="start" />Start Date</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="end" />End Date</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="cons_doc" />Consultancy Document</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="type" />Type</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="cons_fee" />Consultancy Fee</label>
    </li>
    <li>
      <label>
        <input type="checkbox"  class = "selection"  name="selection[]" value="fee_ded" />Fee Deducted</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="expen" />Expenditure</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="faculty" />Faculty</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="assoc" />Association</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="url" />URL</label>
    </li>
    <li>
      <label>
        <input type="checkbox" class = "selection"  name="selection[]" value="nature" />Nature</label>
    </li>
  </ul>
</div>
<input type="submit" name="search" value="Search" class="button1" style="margin-left:30px;"><br><br><br>

                            
<center>              
<table style=" margin-left:-40px; margin-right:40px;">
<?php

if(isset($_POST['search']))
{
      $arr=[];
      $count=0;
      $val="";
      $valueToSearch = $_POST['valueToSearch'];
      $valueToSearch1 = $_POST['start'];
      $valueToSearch2 = $_POST['valueToSearch2'];
      $valueToSearch3 = $_POST['end'];
      $table = $_POST['table'];
      if(!empty($_POST['selection']))
      {
          foreach($_POST['selection'] as $checked)
          {
            $val=$val.$checked.",";
            $arr[$count]=$checked;
            $count=$count+1;
          }
          $val=substr($val,0,strlen($val)-1);

          if(($valueToSearch=="")AND($valueToSearch1=="")AND($valueToSearch2=="")AND($valueToSearch3==""))
          {
              $query = "SELECT $val FROM $table";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch=="")AND($valueToSearch1=="")AND($valueToSearch3==""))
          {
              $query = "SELECT $val FROM $table WHERE type= '$valueToSearch2'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch1=="")AND($valueToSearch2=="")AND($valueToSearch3==""))
          {
              $query = "SELECT $val FROM $table WHERE organized= '$valueToSearch'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch=="")AND($valueToSearch2=="")AND($valueToSearch3==""))
          {
              $query = "SELECT $val FROM $table WHERE start ='$valueToSearch1'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch=="")AND($valueToSearch2==""))
          {
              $query = "SELECT $val FROM $table WHERE start >='$valueToSearch1' AND end <='$valueToSearch3'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch3=="")AND($valueToSearch2==""))
          {
              $query = "SELECT $val FROM $table WHERE organized= '$valueToSearch' AND start ='$valueToSearch1'";
              $search_result = filterTable($query);
          }
          elseif($valueToSearch2=="")
          {
              $query = "SELECT $val FROM $table WHERE organized= '$valueToSearch' AND start >='$valueToSearch1' AND end <='$valueToSearch3'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch=="")AND($valueToSearch3==""))
          {
              $query = "SELECT $val FROM $table WHERE type= '$valueToSearch2' AND start ='$valueToSearch1'";
              $search_result = filterTable($query);
          }
          elseif($valueToSearch=="")
          {
              $query = "SELECT $val FROM $table WHERE type= '$valueToSearch2' AND start >='$valueToSearch1' AND end <='$valueToSearch3'";
              $search_result = filterTable($query);
          }
          elseif($valueToSearch1=="")
          {
              $query = "SELECT $val FROM $table WHERE organized= '$valueToSearch' AND type= '$valueToSearch2'";
              $search_result = filterTable($query);
          }
          else
          {
              $query = "SELECT $val FROM $table WHERE organized= '$valueToSearch' AND type= '$valueToSearch2' AND start >='$valueToSearch1' AND start <='$valueToSearch3'";
              $search_result = filterTable($query);
          }
      }

      else
      {
          if(($valueToSearch=="")AND($valueToSearch1=="")AND($valueToSearch2=="")AND($valueToSearch3==""))
          {
              $query = "SELECT * FROM $table";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch=="")AND($valueToSearch1=="")AND($valueToSearch3==""))
          {
              $query = "SELECT * FROM $table WHERE type= '$valueToSearch2'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch1=="")AND($valueToSearch2=="")AND($valueToSearch3==""))
          {
              $query = "SELECT * FROM $table WHERE organized,= '$valueToSearch'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch=="")AND($valueToSearch2=="")AND($valueToSearch3==""))
          {
              $query = "SELECT * FROM $table WHERE start ='$valueToSearch1'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch=="")AND($valueToSearch2==""))
          {
              $query = "SELECT * FROM $table WHERE start >='$valueToSearch1' AND end <='$valueToSearch3'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch3=="")AND($valueToSearch2==""))
          {
              $query = "SELECT * FROM $table WHERE organized= '$valueToSearch' AND start ='$valueToSearch1'";
              $search_result = filterTable($query);
          }
          elseif($valueToSearch2=="")
          {
              $query = "SELECT * FROM $table WHERE organized= '$valueToSearch' AND start >='$valueToSearch1' AND end <='$valueToSearch3'";
              $search_result = filterTable($query);
          }
          elseif(($valueToSearch=="")AND($valueToSearch3==""))
          {
              $query = "SELECT * FROM $table WHERE type= '$valueToSearch2' AND start ='$valueToSearch1'";
              $search_result = filterTable($query);
          }
          elseif($valueToSearch=="")
          {
              $query = "SELECT * FROM $table WHERE type= '$valueToSearch2' AND start >='$valueToSearch1' AND end <='$valueToSearch3'";
              $search_result = filterTable($query);
          }
          elseif($valueToSearch1=="")
          {
              $query = "SELECT * FROM $table WHERE organized= '$valueToSearch' AND type= '$valueToSearch2'";
              $search_result = filterTable($query);
          }
          else
          {
              $query = "SELECT * FROM $table WHERE organized= '$valueToSearch' AND type= '$valueToSearch2' AND start >='$valueToSearch1' AND end <='$valueToSearch3'";
              $search_result = filterTable($query);
          }
      }
      
  }
  function filterTable($query)
  {
      include('connect.php');
      $filter_Result = mysqli_query($con, $query);
      return $filter_Result;
  }
  ?>

  <tr>
    <?php
        
        if(count($arr)==0)
        {
    ?>
  <tr>
    <th  style="width: 230px; text-align:center;font-size:14px; border-radius: 30px;box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2);">Approver Comment</th>
    <th  style="width: 170px; text-align:center;" class="datalooks">Topic</th>
    <th  style="width: 90px; text-align:center;" class="datalooks">Start</th>
    <th  style="width: 90px; text-align:center;" class="datalooks">End</th>
    <!-- <th  style="width: 130px; text-align:center;" class="datalooks">Consultacy Document</th> -->
    <th  style="width: 120px; text-align:center;" class="datalooks">Type</th>
    <th  style="width: 190px; text-align:center;font-size:14px; border-radius: 30px;box-shadow: 1px 1px 5px 0px rgba(0,0,0,0.2);">Consultancy Fee</th>
    <!-- <th  style="width: 100px; text-align:center;" class="datalooks">Fee Deducted</th> -->
    <!-- <th  style="width: 130px; text-align:center;" class="datalooks">Expenditure</th> -->
    <th  style="width: 120px; text-align:center;" class="datalooks">Faculty</th>
    <th  style="width: 130px; text-align:center;" class="datalooks">Association</th>
    <th  style="width: 130px; text-align:center;" class="datalooks">URL</th>
    <th  style="width: 130px; text-align:center;" class="datalooks">Nature</th>

  </tr>
    <?php
        }
        else
        {
            for($i=0;$i<count($arr);$i++)
            {
    ?>
    <th  style="width: 180px;"class="datalooks"><?php echo $arr[$i]??''; ?></th>
    
    <?php

        if($arr[$i]=="proof")
        {?>
            <th  style="width: 200px;"class="datalooks"><?php echo "Upload" ??''; ?></th>
        <?php
        }
            }
        }
    ?>
  </tr>

<!-- populate table from mysql database -->
<?php 
  if(isset($_POST['search']))
  { 
  while($row = mysqli_fetch_array($search_result)):?>
  <tr class="datalooks">
      
      <?php
      if(isset($row['organized']))
          {?>
      <td><?php echo $row['organized']??''; ?></td>
      <?php
  }?>

      <?php
      if(isset($row['name']))
          {?>
      <td><?php echo $row['name']??''; ?></td>
      <?php
  }?>

      <?php
      if(isset($row['start']))
          {?>
      <td><?php echo $row['start']??''; ?></td>
      <?php
  }?>

      <?php
      if(isset($row['end']))
          {?>
      <td><?php echo $row['end']??''; ?></td>
      <?php
  }?>

      <?php
      if(isset($row['role']))
          {?>
      <td><?php echo $row['role']??''; ?></td>
      <?php
  }?>

      <?php
      if(isset($row['institute']))
          {?>
      <td><?php echo $row['institute']??''; ?></td>
      <?php
  }?>

      <?php
      if(isset($row['duration']))
          {?>
      <td><?php echo $row['duration']??''; ?></td>
      <?php
  }?>


      <?php
      if(isset($row['url']))
          {?>
      <td><?php echo $row['url']??''; ?></td>
      <?php
  }
  else if(isset($row['URL']))
  {
  ?><td><?php echo $row['URL']??''; ?></td>
  <?php
  }
  ?>

      <?php
      if(isset($row['type']))
          {?>
      <td><?php echo $row['type']??''; ?></td>
      <?php
  }?>

      <?php
      if(isset($row['level']))
          {?>
      <td><?php echo $row['level']??''; ?></td>
      <?php
  }?>

      <?php
      if(isset($row['proof']))
          {?>
      <td><a href="showpdf.php?state=<?php echo $row['proof']; ?>"><?php echo $row['proof']; ?></a></td>
      <?php
  }?>

  <?php
      if(isset($row['proof']))
          {?>
  <td ><div class="box1" >
          <button class="upload-button"><a href="#divOne" style="text-decoration: none;">UPLOAD</a></button>
      </div></td>
      <?php
  }?>
  </tr>
  <?php endwhile;}?>


</table>
</center>
<br><br><br><br><br><br>
</form>

<hr>
<center>
<form method="post" action="export.php" style="display:inline-block;">
    <input type="submit" name="export" value="CSV Export" class="button1" />
    <input type="hidden" name="hidden1" value="<?php echo $table??'';?>" /> 
    <input type="hidden" name="hidden2" value="<?php echo $query??'';?>" /> 
</form> 

<button class="button1" onclick="openForm()" style="">Generate Report</button>

  <div class="form-popup" id="myForm">
    <form method="POST" action="generate_pdf.php" class="form-container">
        <br>
      <h5 style="color:#000000;">Please Enter your Name</h5>
        <br>
      <!-- <label for="email"><b style="color:#000000;">Highlights</b></label> -->
      <input type="text" placeholder="E.g. Dr. Arokia Paul" name="highlights" required>
      <input type="hidden" name="hidden1" value="<?php echo $table??'';?>" /> 
      <input type="hidden" name="hidden3" value="<?php echo $val??'';?>" />
      <?php
      foreach($arr as $value)
      {
          ?>
          <input type="hidden" name="result[]" value="<?php echo $value??'';?>">
          <?php
      }
      //$query1=substr($query1,strpos($query1,"where"),strlen($query1)-1);
      ?>
      <input type="hidden" name="hidden2" value="<?php echo $query??'';?>" /> 
      <input type="hidden" name="hidden4" value="<?php echo $valueToSearch1??'';?>" />
      <input type="hidden" name="hidden5" value="<?php echo $valueToSearch3??'';?>" />

      <button type="submit" class="btn">Continue</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>

</center>
<script>
function openForm() 
{
document.getElementById("myForm").style.display = "block";
}

function closeForm() 
{
document.getElementById("myForm").style.display = "none";
}
</script>

<?php include 'footer.php'?>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/templatemo-custom.js"></script>
  <script src="assets/js/checkbox.js"></script>

</body>
</html>