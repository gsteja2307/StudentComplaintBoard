<?php
include 'database.php';

if(isset($_POST['status']))
{
  $status= $_POST['status'];
  $typeggh=$_POST['typevar'];
  $stidggh=$_POST['stidvar'];
  $staff=$_POST['staff'];
  $sql6="UPDATE `complaint` SET `process`=$status , Staff_assigned=$staff WHERE (type='$typeggh' AND Student_ID='$stidggh')";
  $result3=$conn->query($sql6);
  echo "staff Assigned syccessfully";
}
else if(isset($_POST['other']))
{
  $process= $_POST['process'];
  $dept1= $_POST['dept1'];
  $studentid= $_POST['studentid'];

  $sql6="UPDATE `complaint` SET `process`=$process WHERE (type='$dept1' AND Student_ID='$studentid')";
  $result3=$conn->query($sql6);
  if($result3)
  {
      echo "Process Updated  syccessfully";
  }

}
else {
  echo 0;
}
 ?>
