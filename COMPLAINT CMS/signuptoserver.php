<?php
include 'database.php';
if(isset($_GET['Sign-Up']))
{
echo $name=$_GET['UserName'];
echo $email=$_GET['email'];
echo $password=$_GET['password'];
echo $phoneNumber=$_GET['PhoneNumber'];
echo $rollnumber=$_GET['RollNUmber'];

$sql="INSERT INTO `student`(`UserName`, `RollNumber`, `Password`, `Mail`, `Phone Number`) values('$name','$rollnumber','$password','$email','$phoneNumber')";
if($conn->query($sql)){
  header('Location: signup.php?result=Registered Succesfully');

}
else{
  echo 'not inserted';
}




}





 ?>
