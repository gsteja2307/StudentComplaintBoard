<?php
include 'database.php';

if($_POST['update'])
{
  $student= $_POST['student'];
  $dept=$_POST['dept3'];
  $sql23="SELECT * FROM `staff` WHERE Department='".$dept."'";
  $result23=$conn->query($sql23);
  echo '<option>select </option>';
    while($row=mysqli_fetch_assoc($result23))
    {
      echo '<option value='.$row["ID"].'>'.$row["UserName"].'</option>';
    }
}
else {
  echo 0;
}

 ?>
