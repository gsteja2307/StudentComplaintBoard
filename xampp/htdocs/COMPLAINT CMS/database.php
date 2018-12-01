<?php
$conn=new mysqli('localhost','root','','complaint_board');
if($conn->connect_error){
  die('connection failed plz try again :'.$conn->connect_error);
}


 ?>
