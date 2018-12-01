<?php
include 'database.php';

if($_POST['std'])
{
  $studentid= $_POST['std'];
  $feedback= $_POST['fbk'];
  $type= $_POST['typ'];

  echo $sql6="UPDATE `complaint` SET `Feed_Back`='$feedback' WHERE (type='$typ' AND Student_ID='$studentid')";
  $result3=$conn->query($sql6);
  echo "updated syccessfully";


}
else {
  echo 0;
}
 ?>
