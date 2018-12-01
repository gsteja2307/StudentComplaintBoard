<?php
include 'database.php';

if(isset($_POST["keywordstdname"])) {
  $keywordstdname=$_POST["keywordstdname"];

$query ="SELECT * FROM `student` WHERE UserName like '" . $_POST["keywordstdname"] . "%' ORDER BY UserName LIMIT 0,6";
$result = $conn->query($query);
if(!empty($result) && $keywordstdname!="" ) {
echo '<ul class="ulclass" id="studentname-list">';

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
  } }

  else if(isset($_POST["keywordstaffname"])) {
    $keywordstaffname=$_POST["keywordstaffname"];

  $query ="SELECT * FROM `staff` WHERE UserName like '" . $_POST["keywordstaffname"] . "%' ORDER BY UserName LIMIT 0,6";
  $result = $conn->query($query);
  if(!empty($result) && $keywordstaffname!="" ) {
  echo '<ul class="ulclass" id="staffname-list">';

  while($row=mysqli_fetch_assoc($result)) {
  ?>
  <li onClick="SelectStaffName('<?php echo $row["UserName"]; ?>');"><?php echo $row["UserName"]; ?></li>

  <?php
  }
  echo'
  </ul>';
    }
    else {
      echo "";
    } }

    else if(isset($_POST["keywordstdid"])) {
      $keywordstdid=$_POST["keywordstdid"];

    $query ="SELECT * FROM `student` WHERE RollNumber like '" . $_POST["keywordstdid"] . "%' ORDER BY s_id LIMIT 0,6";
    $result = $conn->query($query);
    if(!empty($result) && $keywordstdid!="" ) {
    echo '<ul class="ulclass" id="stdid-list">';

    while($row=mysqli_fetch_assoc($result)) {
    ?>
    <li onClick="SelectStudentid('<?php echo $row["RollNumber"]; ?>');"><?php echo $row["RollNumber"]; ?></li>

    <?php
    }
    echo'
    </ul>';
      }
      else {
        echo "";
      } }

      else if(isset($_POST["keywordstaffid"])) {
        $keywordstaffid=$_POST["keywordstaffid"];

      $query ="SELECT * FROM `staff` WHERE AdmissionNumber like '" . $_POST["keywordstaffid"] . "%' ORDER BY ID LIMIT 0,6";
      $result = $conn->query($query);
      if(!empty($result) && $keywordstaffid!="" ) {
      echo '<ul class="ulclass" id="staffid-list">';

      while($row=mysqli_fetch_assoc($result)) {
      ?>
      <li onClick="SelectStaffid('<?php echo $row["AdmissionNumber"]; ?>');"><?php echo $row["AdmissionNumber"]; ?></li>

      <?php
      }
      echo'
      </ul>';
        }
        else {
          echo "";
        } }


        else if(isset($_POST["keywordtypecmpt"])) {
          $keywordtypecmpt=$_POST["keywordtypecmpt"];

        $query ="SELECT * FROM `type` WHERE Type_of_complaint like '" . $_POST["keywordtypecmpt"] . "%' ORDER BY ID LIMIT 0,6";
        $result = $conn->query($query);
        if(!empty($result) && $keywordtypecmpt!="" ) {
        echo '<ul class="ulclass" id="staffid-list">';

        while($row=mysqli_fetch_assoc($result)) {
        ?>
        <li onClick="Selecttypecmpt('<?php echo $row["ID"]; ?>');"><?php echo ''.$row["ID"].' -'.$row["Type_of_complaint"].'';  ?></li>

        <?php
        }
        echo'
        </ul>';
          }
          else {
            echo "";
          } }

          else if(isset($_POST["keywordstatus"])) {
            $keywordstatus=$_POST["keywordstatus"];

          $query ="SELECT * FROM `status` WHERE Status like '" . $_POST["keywordstatus"] . "%' ORDER BY ID LIMIT 0,6";
          $result = $conn->query($query);
          if(!empty($result) && $keywordstatus!="" ) {
          echo '<ul class="ulclass" id="status-list">';

          while($row=mysqli_fetch_assoc($result)) {
          ?>
          <li onClick="SelectStatus('<?php echo $row["ID"]; ?>');"><?php echo $row["Status"]; ?></li>
          <!-- <li onClick="SelectStudent('..')">'.$row["UserName"].'</li> -->
          <?php
          }
          echo'
          </ul>';
            }
            else {
              echo "";
            } }

            else if(isset($_POST["keywordyear"])) {
              $keywordyear=$_POST["keywordyear"];

            $query ="SELECT * FROM `year` WHERE Year like '" . $_POST["keywordyear"] . "%' ORDER BY ID LIMIT 0,6";
            $result = $conn->query($query);
            if(!empty($result) && $keywordyear!="" ) {
            echo '<ul class="ulclass" id="year-list">';

            while($row=mysqli_fetch_assoc($result)) {
            ?>
            <li onClick="Selectyear('<?php echo $row["ID"]; ?>');"><?php echo " ".$row['ID']."-".$row['Year'].""; ?></li>

            <?php

            }
            echo'
            </ul>';
              }
              else {
                echo "";
              } }

















  ?>
