<?php
include 'database.php';

if(isset($_POST['staff']))
{
  $staff= $_POST['staff'];
  $type=$_POST['type'];
  $stud=$_POST['stud'];
echo $sqll6="UPDATE `complaint` SET Staff_assigned=$staff WHERE (type='$type' AND Student_ID='$stud')";
// $res16=$conn->query($sql16);
mysqli_query($conn,"UPDATE `complaint` SET Staff_assigned=$staff WHERE (type='$type' AND Student_ID='$stud')");


echo "staff updated";
}
else {
  echo 0;
}

 ?>
