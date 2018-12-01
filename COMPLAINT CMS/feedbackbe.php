<?php
include 'database.php';
session_start();
if(isset($_POST['SubmitFeedback'])){
 echo $studentid=$_SESSION['id'];
  echo  $feedback=$_POST['feedbackfromuser'];
  echo  $type=$_POST['type'];
  echo   $sql="UPDATE `complaint` SET Feed_Back='$feedback',Process='5' WHERE Student_ID=$studentid AND type=$type ";
 $result=$conn->query($sql);
 if($result)
 {
   echo 'updated';
   header('Location: viewcomplaintsStudent.php?result23=ThankYou For Your FeedBack');
 }
 else {
   echo "not";
   header('Location: viewcomplaintsStudent.php?result23=Your Feeback was not updated.Please Try again later');
 }



}
 ?>
