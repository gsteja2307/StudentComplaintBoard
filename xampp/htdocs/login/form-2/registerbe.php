<?php
include 'database.php';
if(isset($_GET['register']))
{
echo $name=$_GET['form-first-name'];
echo $email=$_GET['form-email'];
echo $password=$_GET['form-regpassword'];
echo $phoneNumber=$_GET['form-phone-number'];
echo $dateofjoin=$_GET['form-dateofjoin'];

$sql="insert into `register` (`Name`,`Email`,`Password`,`PhoneNumber`,`DateOfJoin`) values('$name','$email','$password','$phoneNumber','$dateofjoin')";
if($conn->query($sql)){
  header('Location: http://localhost/login/form-2/index.php?result=Registered Succesfully');

}
else{
  echo 'not inserted';
}




}





 ?>
