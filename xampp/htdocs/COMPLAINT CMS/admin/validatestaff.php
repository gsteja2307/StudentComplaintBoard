<?php
include 'database.php';
$flag=0;
if(isset($_POST['UN']))
{
  $username= $_POST['UN'];

  if($conn)
  {

    $sql6="SELECT * FROM `staff` WHERE UserName='$username'";
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


else if(isset($_POST['addm']))
{
  $adms= $_POST['addm'];

  if($conn)
  {

    $sql6="SELECT * FROM `staff` WHERE AdmissionNumber='$adms'";
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
