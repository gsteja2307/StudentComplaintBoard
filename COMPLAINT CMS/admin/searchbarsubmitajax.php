<?php

include 'database.php';
$staffidcombi=0;
$staffnamecombi=0;
$typeidcombi=0;

//****************************************************************

//checking which is given as base.

//student name base check
if(isset($_POST['studname'])){
  if(empty($_POST['studname'])){
  $basestudname=0;
}
else {
  $basestudname=1;
}
}
//student name base check ends here

//student id base check
if(isset($_POST['studid'])){
  if(empty($_POST['studid'])){
  $basestudid=0;
}
else {
  $basestudid=1;
}
}
//student id base check ends here
//year base check
if(isset($_POST['year'])){
  if($_POST['year']=='Select'){
  $baseyear=0;
}
else {
  $baseyear=1;
}
}

//year base check ends here
if(isset($_POST['status'])){
  if(empty($_POST['status'])){
  $basestatus=0;
}
else {
  $basestatus=1;
}
}
if(isset($_POST['feedback'])){
  if(empty($_POST['feedback'])){
  $basefeed=0;
}
else {
  $basefeed=1;
}
}
if(isset($_POST['typeid'])){
  if($_POST['typeid']=='Select'){
  $basetype=0;
}
else {
  $basetype=1;
}
}
if(isset($_POST['staffname'])){
  if(empty($_POST['staffname'])){
  $basestaffname=0;
}
else {
  $basestaffname=1;
}
}
if(isset($_POST['staffid'])){
  if(empty($_POST['staffid'])){
  $basestaffid=0;
}
else {
  $basestaffid=1;
}
}


//************************************************************
//student name as base starts here
if($basestudname==1) {
  $flagstaffid=0;
  $flagstaffname=0;
  $flagtype=0;
   $studname=$_POST["studname"];
   $sqlstd="SELECT * FROM `complaint` c JOIN student s on student_ID=s_id where s.UserName='$studname' ";
   //**********************************************************************
   //check for parameters here

//checking if staff id is given
   if(isset($_POST['staffid'])){
     if(empty($_POST['staffid'])){
     $flagstaffid=0;
   }
   else {
     $staffidcombi=1;
     $flagstaffid=1;
   }
   }
   //staff id check ends
   //staff name checking
   if(isset($_POST['staffname'])){
     if(empty($_POST['staffname'])){
     $flagstaffname=0;
   }
   else {
     $staffnamecombi=1;
     $flagstaffname=1;
   }
   }
   //staff name check ends
   //type check here
   if(isset($_POST['typeid'])){

       if($basetype==0){
     $flagtype=0;
   }
   else {
     $typeidcombi=1;
     $flagtype=1;
   }

}
 //type check ends here




//*************************************************************************
//sql area here
//if staff id is given then run this code
if($flagstaffid==1 )
{
 $studname=$_POST["studname"];
 $staffid=$_POST["staffid"];

  $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID JOIN staff as sff on sff.ID=c.Staff_assigned where stu.Username="'.$studname.'" and sff.AdmissionNumber='.$staffid.'';
}
//staff id check code ends here
//if staff name is given run this code
if($flagstaffname==1 )
{
  $studname=$_POST["studname"];
  $staffname=$_POST["staffname"];
   $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID JOIN staff as sff on sff.ID=c.Staff_assigned where stu.Username="'.$studname.'" and sff.UserName="'.$staffname.'"';
}
//staff name code ends here
//if type is given, run this code
if($flagtype==1 )
{
  $studname=$_POST["studname"];
  $type=$_POST["typeid"];
   $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID where stu.Username="'.$studname.'" and c.type='.$type.'';
}
//type code ends here

       $result=$conn->query($sqlstd);
          $i=1;
          echo " <strong>complaints Related to ".$studname."</strong><br><br>";
          echo "<table class='table'>
          <thead class='info'>
          <th>s.no</th>
          <th>Complaint</th>
          </thead>
          <tbody>";

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<tr class='danger'><td>".$i."</td>
                <td>".$row['Complaint']."</td></tr>";
                $i++;
            }
            echo " </tbody></table>";
          }
//studname base ends here
//********************************************************************************
//***********************************************************************************
//student id as base starts here
if($basestudid==1) {
  $flagstaffid=0;
  $flagstaffname=0;
  $flagtype=0;
   $studid=$_POST["studid"];
  $sqlstd="SELECT * FROM `complaint` c JOIN student s on Student_ID=s_id where RollNumber='".$studid."' ";

  //check for parameters here

  //checking if staff id is given
  if(isset($_POST['staffid'])){
    if(empty($_POST['staffid'])){
    $flagstaffid=0;
  }
  else {
    $staffidcombi=1;
    $flagstaffid=1;
  }
  }
  //staff id check ends
  //staff name checking
  if(isset($_POST['staffname'])){
    if(empty($_POST['staffname'])){
    $flagstaffname=0;
  }
  else {
    $staffnamecombi=1;
    $flagstaffname=1;
  }
  }
  //staff name check ends
  //type check here
  if(isset($_POST['typeid'])){

      if($basetype==0){
    $flagtype=0;
  }
  else {
    $typeidcombi=1;
    $flagtype=1;
  }

}
  //type check ends here
  //*************************************************************************
  //sql area here
  //if staff id is given then run this code
  if($flagstaffid==1 )
  {
  $studid=$_POST["studid"];
  $staffid=$_POST["staffid"];

   $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID JOIN staff as sff on sff.ID=c.Staff_assigned where stu.RollNumber="'.$studid.'" and sff.AdmissionNumber='.$staffid.'';
  }
  //staff id check code ends here
  //if staff name is given run this code
  if($flagstaffname==1 )
  {
  $studid=$_POST["studid"];
  $staffname=$_POST["staffname"];
   $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID JOIN staff as sff on sff.ID=c.Staff_assigned where stu.RollNumber="'.$studid.'" and sff.UserName="'.$staffname.'"';
  }
  //staff name code ends here
  //if type is given, run this code
  if($flagtype==1 )
  {
  $studid=$_POST["studid"];
  $type=$_POST["typeid"];
   $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID where stu.RollNumber="'.$studid.'" and c.type='.$type.'';
  }
  //type code ends here

   //**********************************************************************

       $result=$conn->query($sqlstd);
          $i=1;
          echo " <strong>complaints Related to parameter given :".$studid."</strong><br><br>";
          echo "<table class='table'>
          <thead class='info'>
          <th>s.no</th>
          <th>Complaint</th>
          </thead>
          <tbody>";

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<tr class='danger'><td>".$i."</td>
                <td>".$row['Complaint']."</td></tr>";
                $i++;
            }
            echo " </tbody></table>";
          }
//student id as base ends here
//**************************************************************************************
//**********************************************************************************
//************************************************************
//year as base starts here
if($baseyear==1) {
    $flagtype=0;
   $year=$_POST["year"];
   $sqlstd="SELECT * FROM `complaint` c JOIN student s on student_ID=s_id where s.Year=$year ";
   //**********************************************************************
   //check for parameters here

   if(isset($_POST['typeid'])){

       if($basetype==0){
     $flagtype=0;
   }
   else {
     $typeidcombi=1;
     $flagtype=1;
   }

}
 //type check ends here




//*************************************************************************
//sql area here

//if type is given, run this code
if($flagtype==1 )
{
  $studname=$_POST["studname"];
  $type=$_POST["typeid"];
   $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID where stu.Year='.$year.' and c.type='.$type.'';
}
//type code ends here

       $result=$conn->query($sqlstd);
          $i=1;
          echo " <strong>complaints Related to year ".$year."</strong><br><br>";
          echo "<table class='table'>
          <thead class='info'>
          <th>s.no</th>
          <th>Complaint</th>
          </thead>
          <tbody>";

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<tr class='danger'><td>".$i."</td>
                <td>".$row['Complaint']."</td></tr>";
                $i++;
            }
            echo " </tbody></table>";
          }
//studname base ends here
//********************************************************************************
//***********************************************************************************
if($basestatus==1) {

   $status=$_POST["status"];
   $sqlstd="SELECT * FROM `complaint` c JOIN student s on student_ID=s_id where c.Process='$status' ";


       $result=$conn->query($sqlstd);
          $i=1;
          echo " <strong>complaints Related to status : ".$status."</strong><br><br>";
          echo "<table class='table'>
          <thead class='info'>
          <th>s.no</th>
          <th>Complaint</th>
          </thead>
          <tbody>";

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<tr class='danger'><td>".$i."</td>
                <td>".$row['Complaint']."</td></tr>";
                $i++;
            }
            echo " </tbody></table>";
          }
          //*************************************************************************************
          //************************************************************************************
          if($basefeed==1) {

             $feedback=$_POST["feedback"];
             $sqlstd="SELECT * FROM `complaint` c JOIN student s on student_ID=s_id where c.Feed_Back='$feedback' ";


                 $result=$conn->query($sqlstd);
                    $i=1;
                    echo " <strong>complaints Related to status : ".$status."</strong><br><br>";
                    echo "<table class='table'>
                    <thead class='info'>
                    <th>s.no</th>
                    <th>Complaint</th>
                    </thead>
                    <tbody>";

                      while($row=mysqli_fetch_assoc($result))
                      {
                          echo "<tr class='danger'><td>".$i."</td>
                          <td>".$row['Complaint']."</td></tr>";
                          $i++;
                      }
                      echo " </tbody></table>";
                    }
/****************************************************************************************************************************************************************************************************************************************************************************************************/
if($basetype==1 && $typeidcombi==0) {

   $status=$_POST["typeid"];
   $sqlstd="SELECT * FROM `complaint` c JOIN student s on student_ID=s_id where c.type='$status' ";


       $result=$conn->query($sqlstd);
          $i=1;
          echo " <strong>complaints Related to type : ".$status."</strong><br><br>";
          echo "<table class='table'>
          <thead class='info'>
          <th>s.no</th>
          <th>Complaint</th>
          </thead>
          <tbody>";

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<tr class='danger'><td>".$i."</td>
                <td>".$row['Complaint']."</td></tr>";
                $i++;
            }
            echo " </tbody></table>";
          }
//****************************************************************************************
//*******************************************************************
if($basestaffname==1 && $staffnamecombi==0) {

   $staffname=$_POST["staffname"];
   $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID JOIN staff as sff on sff.ID=c.Staff_assigned where  sff.UserName="'.$staffname.'"';
       $result=$conn->query($sqlstd);
          $i=1;
          echo " <strong>complaints Related to Staff Name : ".$staffname."</strong><br><br>";
          echo "<table class='table'>
          <thead class='info'>
          <th>s.no</th>
          <th>Complaint</th>
          </thead>
          <tbody>";

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<tr class='danger'><td>".$i."</td>
                <td>".$row['Complaint']."</td></tr>";
                $i++;
            }
            echo " </tbody></table>";
          }
// *********************************************************************************
// *********************************************************************************

          if($basestaffid==1 && $staffidcombi==0) {

             $staffid=$_POST["staffid"];
             $sqlstd= 'SELECT * FROM complaint as c JOIN student as stu on stu.s_id=c.Student_ID JOIN staff as sff on sff.ID=c.Staff_assigned where sff.AdmissionNumber='.$staffid.'';


                 $result=$conn->query($sqlstd);
                    $i=1;
                    echo " <strong>complaints Related to staff id : ".$staffid."</strong><br><br>";
                    echo "<table class='table'>
                    <thead class='info'>
                    <th>s.no</th>
                    <th>Complaint</th>
                    </thead>
                    <tbody>";

                      while($row=mysqli_fetch_assoc($result))
                      {
                          echo "<tr class='danger'><td>".$i."</td>
                          <td>".$row['Complaint']."</td></tr>";
                          $i++;
                      }
                      echo " </tbody></table>";
                    }
// *********************************************************************************
  // *********************************************************************************
          else {
            echo "";
          }
