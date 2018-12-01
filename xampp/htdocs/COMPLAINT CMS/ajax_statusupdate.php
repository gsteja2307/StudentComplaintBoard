<?php
include 'database.php';

if($_POST['responsenum'])
{
  $status= $_POST['responsenum'];
  $typeggh= $_POST['typenum'];
  $stidggh= $_POST['studentnum'];

  echo $sql6="UPDATE `complaint` SET `Process`='$status' WHERE (type='$typeggh' AND Student_ID='$stidggh')";
  $result3=$conn->query($sql6);
  echo "updated syccessfully";


}
else {
  echo 0;
}
 ?>
