<?php
include 'database.php';
if(isset($_POST['Sign-In'])){
 $loginName=$_POST['emailLogin'];
 $loginPassword=$_POST['passwordLogin'];
 $sql="SELECT `UserName`,`Password` FROM `staff` where UserName='$loginName' && Password='$loginPassword'";
$result=$conn->query($sql);
if(mysqli_num_rows($result)!=0){
  // echo mysqli_num_rows($result);
  header('Location: index.php');
}
else{
  // echo mysqli_num_rows($result);
  header('Location: staffsignin.php?result2=wrong Username Or Password');
}

}



 ?>
