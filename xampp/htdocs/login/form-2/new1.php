<h1 style='color:red'>UPDATE BELOW</h1>
<form class="" action="new1.php" method="GET">
  <lable>new name</lable><input type='text' name='updatedName'><br>
  <input type='hidden' name='upd' value="<?=$_GET['upd']?>"><br>
  <input type='submit' name='submit'>

</form>
<?php
include 'database.php';

if(isset($_GET['submit'])){
  $name=$_GET['updatedName'];
  $newsno=$_GET['upd'];
  $sql="UPDATE `register` SET `Name`='$name' WHERE `S.NO`='$newsno'";
  if($conn->query($sql)){
    echo "updated";
    header('Location: new2.php');

  }
  else {
    echo "not valid SNO or NAme";
  }
}
else {
  echo "inelse";
}
?>
<!-- 1 online exam system
2 online blood bank
3 complaint managment system -->
<!-- search for templet
it should contain 3 panels
1 admin panel
1 student panel
1 staff panel
ok
DESKTOP-25FFS2G (21:24):
ok
DESKTOP-K72DK25 (21:25):
after searching templet creater all this panels
k
make register and login
for all 3 panels
after that what need to do ill tell
k
till sat do all these -->
