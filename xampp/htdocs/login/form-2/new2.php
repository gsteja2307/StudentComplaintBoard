<?php
include 'database.php';
if(isset($_GET['id'])){
  $deletething=$_GET['id'];
  $sql2="DELETE FROM `register` WHERE `S.NO` = $deletething";
  $deleteNow=$conn->query($sql2);
  if($deleteNow)
  {
    echo "deleted success";
  }
  else {
    echo "not del";
  }
} ?>
<h1 style="color:blue">log in succesful</h1>
<style>
table, th, td {
   border: 1px solid black;
}
</style>
<?php

$sql="SELECT * FROM `register`";
$result=$conn->query($sql);
echo '<table style="border: 1px solid black;">  <tbody>';
while($row=mysqli_fetch_assoc($result))
{
  $name2=$row['Name'];

  echo "  <tr><td>".$row['Name']." </td>
  <td>".$row['PhoneNumber']."  </td>
   <td><a href='new2.php?id=".$row['S.NO']." '><button  type='submit' >delete</button></a> </td>
    <td><a href='new1.php?upd=".$row['S.NO']."'><button type='submit'>update</button> </a>  </td> </tr>";

}


echo '</tbody>';

?>





<!-- <button type="" name="button"></button> -->
<!-- fetch_assoc()
fetch_row() -->
