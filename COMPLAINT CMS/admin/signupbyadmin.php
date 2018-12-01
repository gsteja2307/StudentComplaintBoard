<?php
include 'database.php';
if(isset($_GET['Sign-Up']))
{
  $flag=0;
echo $name=$_GET['UserName'];
echo $email=$_GET['email'];
echo $password=$_GET['password'];
echo $phoneNumber=$_GET['PhoneNumber'];
echo $rollnumber=$_GET['RollNUmber'];
$sqlcheck="SELECT * FROM `student`";
$result=$conn->query($sqlcheck);
while($row=mysqli_fetch_assoc($result))
{
  echo $row['Mail'];
 if($row['Mail']==$email){
   header('Location: newreg.php?result=email already exists');
   $flag=1;
 }
}
if($flag==0){
$sql="INSERT INTO `student`(`UserName`, `RollNumber`, `Password`, `Mail`, `Phone Number`) values('$name','$rollnumber','$password','$email','$phoneNumber')";
if($conn->query($sql)){
  header('Location: newreg.php?result=Registered Succesfully');

}
else{
  echo 'not inserted';
}




}
}






 ?>
