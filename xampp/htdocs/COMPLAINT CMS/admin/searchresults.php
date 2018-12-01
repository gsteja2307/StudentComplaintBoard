<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel of complaint board </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="js/d3.v3.js"></script>
<script src="js/rickshaw.js"></script>
<style media="screen">
  td,th,table{
    border: 1px solid black;
  }
</style>
</head>
<body>

     <!-- Navigation -->

     <?php include 'adminheader.php'; ?>



        <?php include 'adminmenu.php'; ?>



        <div id="page-wrapper">
        <div class="graphs">

      	  <div class="span_11">

    <div class="content_bottom">
     <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
        <?php
        include 'database.php';

        if(isset($_GET['Search']))
        {
          $flag=0;
       $studname=$_GET['studname'];
       $staffname=$_GET['staffname'];
       $studid=$_GET['studid'];
       $staffid=$_GET['staffid'];
       $typeid=$_GET['typeid'];
        // echo $sqlcheck="SELECT * FROM `complaint` c JOIN student s on student_ID=s_id JOIN staff t on c.type=Department WHERE c.type=$typeid AND Complaint=(SELECT Complaint FROM `complaint` c JOIN student s on student_ID=s_id JOIN staff t on c.type=Department WHERE RollNumber=$studid AND t.UserName=(SELECT t.UserName FROM `complaint` c JOIN student s on student_ID=s_id JOIN staff t on c.type=Department WHERE AdmissionNumber=$staffid AND t.UserName=$staffname )  )   ";
if(isset($_GET['studname']))
{
    $sqlstd="SELECT * FROM `complaint` c JOIN student s on student_ID=s_id where s.UserName='$studname' ";
}

          $result=$conn->query($sqlstd);
        //  print_r($result);
        $i=1;
        echo " <strong>complaints Related to ".$studname."</strong><br><br>";
        echo "<table>
        <thead>
        <th>s.no</th>
        <th>Complaint</th>
        </thead>
        <tbody>";

          while($row=mysqli_fetch_assoc($result))
          {
              echo "<tr><td>".$i."</td>
              <td>".$row['Complaint']."</td></tr>";
              $i++;
          }
          echo " </tbody></table>";


      }
        ?>
		   </div>
	   </div>

		<div class="clearfix"> </div>
	    </div>




		<?php include 'adminfooter.php'; ?>






		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
