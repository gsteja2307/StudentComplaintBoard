<?php
include 'database.php';
if(isset($_POST['checklogin'])){
 $loginName=$_POST['form-username'];
 $loginPassword=$_POST['form-password'];
 $sql="SELECT `Name`,`Password` FROM `register` where Name='$loginName' && Password='$loginPassword'";
$result=$conn->query($sql);
if(mysqli_num_rows($result)!=0){
  // echo mysqli_num_rows($result);
  header('Location: new2.php');
}
else{
  // echo mysqli_num_rows($result);
  header('Location: index.php?result2=wrong Username Or Password');
}

}



 ?>
 <!-- dghdghdhdg -->
