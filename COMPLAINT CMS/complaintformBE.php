<?php
include 'database.php';
session_start();
if(isset($_GET['submitcomplaint']))
{
 $type=$_GET['typeC'];
 $message=$_GET['message'];
 $id= $_SESSION['id'];
// $sqlcheckcomp ="SELECT * FROM `complaint` where type='$type' AND Student_ID=".$id."";
// ******** count test
// SELECT COUNT(column_name) FROM `complaint` WHERE type='' AND Student_ID='';

// *********
echo "<br>";
echo "SELECT COUNT(*) cont  FROM `complaint` WHERE type='$type' AND Student_ID='$id'";
$result = $conn->query("SELECT COUNT(*) cont  FROM `complaint` WHERE type='$type' AND Student_ID='$id'");
// SELECT * FROM `complaint` WHERE type='$type'
// $querycheck = "SELECT * FROM `complaint` WHERE type='$type'";
$row=mysqli_fetch_assoc($result);

echo "<br>";echo "<br>";
echo $row['cont'];
if($row['cont']>0){
//     return true;
// }
// if($conn->mysql_num_rows($querycheck) > 0){

           header('Location: complaint form.php?result=cannot submit another complaint of same department');
}
// if($conn->query($sqlcheckcomp)){
//
//
// }
else{
  echo "<br>";
echo $sql="insert into `complaint` (`type`, `Complaint`, `Open_Date`,`Student_ID`,`status`) values('$type','$message',NOW(),'$id','open')";
if($conn->query($sql)){
  header('Location: complaint form.php?result=submitted Succesfully');

}
else{
  echo 'not inserted';
}
}




}





 ?>
