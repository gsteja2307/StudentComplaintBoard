<?php
include 'database.php';
session_start();
if(isset($_POST['Sign-In'])){
 $loginName=$_POST['emailLogin'];
 $loginPassword=$_POST['passwordLogin'];
 $typevalue=$_POST['type'];
 if($typevalue==1){
 $sql="SELECT * FROM `student` where UserName='$loginName' && Password='$loginPassword'";
$result=$conn->query($sql);
if(mysqli_num_rows($result)!=0){
  // echo mysqli_num_rows($result);
  $row=mysqli_fetch_assoc($result);

  $_SESSION["name"] = $row['UserName'];
  $_SESSION['id'] = $row['s_id'];
  header('Location: index.php');
}
else{
  // echo mysqli_num_rows($result);
  header('Location: STARTWITHLOGIN.php?result2=wrong Username Or Password');
}

}else if($typevalue==2){
  $sqls="SELECT * FROM `staff` where UserName='$loginName' && Password='$loginPassword'";
 $result=$conn->query($sqls);
 if(mysqli_num_rows($result)!=0){
  $row=mysqli_fetch_assoc($result);

 $_SESSION["name"] = $row['UserName'];
 $_SESSION["id"] = $row['ID'];
   // echo mysqli_num_rows($result);
   header('Location: staffindex.php');
 }
 else{
   // echo mysqli_num_rows($result);
   header('Location: STARTWITHLOGIN.php?result2=wrong Username Or Password');
 }

}
 else if($typevalue==3){
   // echo mysqli_num_rows($result);
   $loginName=$_POST['emailLogin'];
   $loginPassword=$_POST['passwordLogin'];
   if($loginName == 'ADMIN' && $loginPassword=='ADMIN')
   {
  header('Location:admin/index2.php');
   }

 }

}






 ?>
