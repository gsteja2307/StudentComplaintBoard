<?php
include 'database.php';

if($_POST['staff'])
{
  $staffname= $_POST['staff'];
  $dept=$_POST['dept1'];
  $sql="SELECT * FROM `staff` WHERE Department='".$dept."'";
  $result3=$conn->query($sql);
  echo '<option>select </option>';
    while($row=mysqli_fetch_assoc($result3))
    {
      echo '<option value='.$row["ID"].'>'.$row["UserName"].'</option>';
    }
}
else {
  echo 0;
}

 ?>
