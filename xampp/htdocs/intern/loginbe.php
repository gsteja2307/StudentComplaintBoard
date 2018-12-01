<?php
include 'db.php';
if(isset($_GET['submit']))
{
  echo $name=$_GET['name'];
  echo $password=$_GET['password'];
    $sql="insert into student (`Name`,`password`,`Date_of_Joining`) values('$name','$password',NOW())";
    if($conn->query($sql))
    {
      echo "inserted";
    }
    else {
      echo "not inserted";
    }
}
?>
