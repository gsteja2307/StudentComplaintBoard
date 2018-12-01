<?php
include 'database.php';
if(isset($_GET['Sign-Up']))
{
  $flag=0;
echo $name=$_GET['UserName'];
echo $dept=$_GET['Department'];
echo $password=$_GET['password'];
echo $phoneNumber=$_GET['PhoneNumber'];
echo $rollnumber=$_GET['AddmNUmber'];
$sqlcheck="SELECT * FROM `staff`";
$result=$conn->query($sqlcheck);
while($row=mysqli_fetch_assoc($result))
{
  echo $row['UserName'];
 if($row['UserName']==$name){
   header('Location: newreg.php?result=email already exists');
   $flag=1;
 }
}
if($flag==0){
$sql="INSERT INTO `staff`(`UserName`, `Department`, `Password`, `AdmissionNumber`, `PhoneNumber`) values('$name','$dept','$password','$rollnumber','$phoneNumber')";
if($conn->query($sql)){
  header('Location: newreg.php?result=Registered Succesfully');

}
else{
  echo 'not inserted';
}




}
}






 ?>
