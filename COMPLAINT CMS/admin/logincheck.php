<?php
include 'database.php';
if(isset($_POST['login'])){
 $loginName=$_POST['admin-email'];
 $loginPassword=$_POST['admin-password'];
 $sql="SELECT `UserName`,`Password` FROM `staff` where UserName='$loginName' && Password='$loginPassword'";
$result=$conn->query($sql);
if(mysqli_num_rows($result)!=0){
  // echo mysqli_num_rows($result);
  header('Location: index2.php');
}
else{
  // echo mysqli_num_rows($result);
  header('Location: index.php?result2=wrong Username Or Password');
}

}



 ?>
 <!-- dghdghdhdg -->
