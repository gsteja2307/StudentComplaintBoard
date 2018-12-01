<?php
include 'database.php';

// if(isset($_POST['keyword']))
// {
//   $status= $_POST['status'];
//   $typeggh=$_POST['typevar'];
//   $stidggh=$_POST['stidvar'];
//   $staff=$_POST['staff'];
//   $sql6="UPDATE `complaint` SET `process`=$status , Staff_assigned=$staff WHERE (type='$typeggh' AND Student_ID='$stidggh')";
//   $result3=$conn->query($sql6);
//   echo "staff Assigned syccessfully";
// }


if(isset($_POST["keyword"])) {
  $keyword=$_POST["keyword"];

$query ="SELECT * FROM `student` WHERE UserName like '" . $_POST["keyword"] . "%' ORDER BY UserName LIMIT 0,6";
$result = $conn->query($query);
if(!empty($result) && $keyword!="" ) {
echo '<ul id="studentname-list">';

while($row=mysqli_fetch_assoc($result)) {
?>
<li onClick="SelectStudent('<?php echo $row["UserName"]; ?>');"><?php echo $row["UserName"]; ?></li>
<!-- <li onClick="SelectStudent('..')">'.$row["UserName"].'</li> -->
<?php
}
echo'
</ul>';
  }
  else {
    echo "";
  } } ?>
