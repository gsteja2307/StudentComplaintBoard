
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>





  <style>
  * {box-sizing: border-box}
  body {font-family: "Lato", sans-serif;}

  /* Style the tab */
  .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 30%;
      height: 300px;
  }

  /* Style the buttons inside the tab */
  .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 22px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
      background-color: #ddd;
  }

  /* Create an active/current "tab button" class */
  .tab button.active {
      background-color: #ccc;
  }

  /* Style the tab content */
  .tabcontent {
      float: left;
      padding: 0px 12px;
      border: 1px solid #ccc;
      width: 70%;
      border-left: none;
      height: 300px;
  }
  .sel{
    font-size: 0.9em;
    padding: 10px 20px;
    width: 45%;
    color:#8C8C8C;
    outline: none;
    border: 1px solid #D3D3D3;
     border-radius: 5px;
  -ms-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
    background:#F5F5F5;
    margin: 0em 0em 1.5em 0em;
  }

  </style>


<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Compose :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>.

<link rel="stylesheet" href="edit.css">

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
     <?php include 'adminheader.php'; ?>



        <?php include 'adminmenu.php'; ?>



<!-- <p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div> -->

<!-- <script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
function staffnew(staffidnum1,typenum1,studentidnum1) {
  var staff_id=staffidnum1;
  var type_id=typenum1;
  var stud_id=studentidnum1;
  alert(staff_id);
  alert(type_id);
  alert(stud_id);
  alert("in slect");
  $.post("staffassignchange.php",{staff:staff_id,type:type_id,stud:stud_id},function(result){
    alert("after func");
    alert(result);
  })

}
  function status(staff,studentid) {
    var typenum=document.getElementById('type3').value;
    var status=document.getElementById('typeofselection').value;

    $.post("ajax_status.php",{status:status,typevar:typenum,stidvar:studentid,staff:staff},  function(result){
       (result);
   });
  }

  function displaystaff(processid,dept,studentid) {
     var staffname=document.getElementById('staffAssigned').value;


if(processid==4)
{
alert("in if");
     var staffname=document.getElementById('staffAssigned').value;
     var typeid=dept;

     $.post("staff_status.php",{staff:staffname,dept1:typeid},function(result){

       document.getElementById('allstaff').innerHTML=result;
          });

}
else {
alert("in else");

  var typeid=dept;

  $.post("ajax_status.php",{other:"other",dept1:typeid,process:processid,studentid:studentid},function(result){
alert(result);
    //document.getElementById('allstaff').innerHTML=result;
       });



  //alert("in else");
// status(a,c,staffname);
}
}
function taffupdate(studentid,typeofcomp) {
  document.getElementById('taffchange'+studentid).style.display = 'inline';
  // document.getElementsByClassName('taffchange').style.display = 'inline';
// var student=studentid;
// var dept2=typeofcomp;
// $.post("staff_change.php",{update:"update",student:student,dept3:dept2},function(result){
//   document.getElementById('allstaff').innerHTML=result;
// });
}

</script>





        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Compose</h3>
  	         <div class="col-md-4 email-list1">
                <ul class='collection'>
<?php
include 'database.php';

// $sql="SELECT * FROM `complaint`";
// $result=$conn->query($sql);

            $i=2;
            // while($row=mysqli_fetch_assoc($result))
            // {
              // $id=$i;
              $j=1;
              $sql1="SELECT * FROM `type`";
              $result1=$conn->query($sql1);
              while($type=mysqli_fetch_array($result1))
                          {
                             $typeid=$type['ID'];
                             $complainttype=$type['Type_of_complaint'];

echo "  <li class='collection-item avatar email-unread'><div class='avatar_left'>
<a href='viewcomplaint.php?id=".$typeid."'>  <span class='email-title tablinks' onclick='openCity(event, 'London')' style='    cursor: pointer;' id='defaultOpen' >".$complainttype."</span></a>
 </div></li>

 ";

            }  ?>

              </ul>



        </div>

        <div class="col-md-8 inbox_right">
          <div class="Compose-Message">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Complaints
                    </div>
                    <div class="panel-body">
                      <?php
                      $namenum7=0;
                      $sqlstaff=0;
                      $result5=0;
                      $row5=0;
                      $name7=0;

                          if(isset($_GET['id']))
                          {
                            $idd=$_GET['id'];

                          }



                      $sql5="SELECT * FROM `complaint`c JOIN `Student` s on Student_ID=S_id where Process=5";
                      $result3=$conn->query($sql5);
                      $k=1;
                      $typename='problemtype';


                    while($row2=mysqli_fetch_assoc($result3))
                    {
                      $namenum7=$row2['Staff_assigned'];
                      if($namenum7=="")
                      {
                        $namenum7=0;
                      }
                       $sqlstaff="SELECT * FROM `staff` WHERE ID=$namenum7";
                      $result5=$conn->query($sqlstaff);
                      $row5=mysqli_fetch_assoc($result5);
                      $name7=$row5['UserName'];


                      switch($row2['type']){
                        case 1:
                        $typevalue=1;
                        $typename='Bus';
                        break;
                        case 2:$typevalue=2;
                        $typename='Water';
                        break;
                        case 3:
                        $typevalue=3;
                        $typename='Teaching';
                        break;
                        case 4:
                        $typevalue=4;
                        $typename='Sports';
                        break;
                      }

                      switch($row2['Process']){
                        case 0:
                        $status='unread';

                        case 1:

                        $status='Processing';
                        break;
                        case 2:

                        $status='Rejected';
                        break;
                        case 3:

                        $status='Waiting for Feedback';
                        break;
                        case 4:

                        $status='Accepted';
                        break;
                        case 5:

                        $status='Closed';
                        break;
                      }



                        // $name2=$row['Name'];

                        echo "
    <h3 style='text-decoration:underline;'><b style='font-weight: 400;font-size: 23px;'>Complaint</b></h3>
                        <p style='font-size: 20px;margin-top:-21px;padding-left:68px'> ".$row2['Complaint']."</p>
                        <h3><b style='font-weight: 400;font-size: 23px;' >Type: </b><span style='font-size: 20px; '>".$typename."</b></span>
                        <h3><b style='font-weight: 400;font-size: 23px;'>Open Date: </b><span style='font-size: 20px; '>".$row2['Open_Date']."</span>
                        <h3><b style='font-weight: 400;font-size: 23px;'>student-ID: </b><span style='font-size: 20px; '>".$row2['UserName']."</span>
                        <h3><b style='font-weight: 400;font-size: 23px;'>Status: </b><span style='font-size: 20px; '>".$status."</span>"
                         ;
                         // echo "<hr> <br><br>";

                         echo "<br>
                         <input type='hidden' id='type3' value=".$row2['type']."  ><br>
                         <input type='hidden' id='s3id' value=".$row2['Student_ID'].">
<p>


<span>staff assigned:</span><span>
";
if($row2['Staff_assigned']==''){
  echo "<input id='staffAssigned' style='display:none;' value='ADMIN' readonly>";
echo "
<select id='allstaff' onchange='status(this.value,".$row2['Student_ID'].")'>
<option> No Staff Assigned</option>
</select>";
}else
{
echo '<lable>'.$name7.'</lable>';
echo "<input id='staffAssigned' style='display:none;' value='".$name7."' readonly>";
}
$sid=$row2["Student_ID"];
echo "
</span>
</p><br>
<h3><b style='font-weight: 400;font-size: 23px;'><button class='sel' style='border:none;background-color:inherit;' onclick='taffupdate(".$row2['Student_ID'].",".$typevalue.")'>Assign New staff:</button> </b>


<select style='display:none;' class='sel dropdown taffchange' name='taffchange' id='taffchange".$sid."' onchange='staffnew(this.value,".$typevalue.",".$row2['Student_ID'].")' >
<option >select</option>";
$sql23="SELECT * FROM `staff` WHERE Department='". $row2['type']."'";
$result23=$conn->query($sql23);

  while($row=mysqli_fetch_assoc($result23))
  {
    echo '<option value='.$row["ID"].'>'.$row["UserName"].'</option>';
  }

echo"




                         </select>
                         <br>
  <h3><b style='font-weight: 400;font-size: 23px;'>New Status: </b>
  <select class='sel dropdown' name='typeofselection' id='typeofselection' onchange='displaystaff(this.value,".$typevalue.",".$row2['Student_ID'].")'>


                           <option >select</option>
                           <option value='4'>Accepted</option>
                            <option value='2'>Rejected</option>
                           <option value='1'>Processing</option>
                           <option value='3'>Waiting for Feedback</option>

                           <option value='5'>Closed</option><br><br><br><br><br><br><hr></select>";



                        // $i++;
  echo "<hr> <br><br>";
                    }

                     echo "</optgroup>
                   </select >
                   ";






                     ?>



                        <!-- <a href='#' class='btn btn-warning btn-warng1'><span class='glyphicon glyphicon-envelope tag_02'></span>  </a>&nbsp;
                      <a href='#' class='btn btn-success btn-warng1'><span class='glyphicon glyphicon-tags tag_01'></span> Save To Drafts </a> -->
                    </div>
                 </div>
              </div>
         </div>





        </div>



         <div class="clearfix"> </div>

   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



   </div>
   <?php include 'adminfooter.php'; ?>
   </div>
      </div>
      <!-- /#page-wrapper -->openCity
   </div>

    <!-- /#wrapper -->

<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
