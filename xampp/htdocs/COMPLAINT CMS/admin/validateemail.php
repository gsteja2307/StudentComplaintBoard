<?php
include 'database.php';
$flag=0;
if($_POST['email'])
{
  $emailEntered= $_POST['email'];

  if($conn)
  {

    $sql6="SELECT * FROM `student` WHERE Mail='$emailEntered'";
    $result3=$conn->query($sql6);
    $count=mysqli_num_rows($result3);
    if($count==1)
    {
        echo $flag=1;
    }
    else
    {
       echo $flag=0;
    }

 }
}


if($_POST['rollnumber'])
{
  $rollnumberEntered= $_POST['rollnumber'];

  if($conn)
  {

    $sql6="SELECT * FROM `student` WHERE RollNumber='$rollnumberEntered'";
    $result3=$conn->query($sql6);
    $count=mysqli_num_rows($result3);
    if($count==1)
    {
        echo $flag=1;
    }
    else
    {
       echo $flag=0;
    }

 }
}

 ?>
