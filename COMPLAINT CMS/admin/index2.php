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
		    <table class="table">
          <?php
          include 'database.php';

          if(isset($_GET['id'])){
            $processid=$_GET['id'];
            $sql2="UPDATE `complaint` SET `Process`='1' WHERE ID='$processid'";
            $updateProcess=$conn->query($sql2);
            if($updateProcess)
            {
              echo "Process Started";
            }
            else {
              echo "Couldn't start the process";
            }
          }

          $sql="SELECT * FROM `complaint`";
          $result=$conn->query($sql);
          $getidvar=mysqli_fetch_assoc($result);

          echo "<thead>
		        <tr>
		          <th> S.no</th>
		          <th>Complaint</th>
		          <th>Status</th>
		          <th>process</th>
              <th>-</th>
		        </tr>
		      </thead>
		      <tbody>";

            // echo '<table style="border: 1px solid black;">  <tbody>';
            $i=1;
            while($row=mysqli_fetch_assoc($result))
            {
              // $name2=$row['Name'];

              echo "  <tr><td>".$i."</td>
              <td>".$row['Complaint']."</td>
              <td>".$row['Status']."</td>
              <td><a href='viewcomplaint.php?id=".$row['ID']." '><button  type='submit' >View complaint</button></a></td> <td>";


                  if(isset($_GET['id']))
                  {
                    $res2='process started  ';
                    echo '<p style="color:red;">'.$res2.'</p>';
                  }

                "

               </td></tr>";
               $i++;
            }


            echo '</tbody>';

            ?>

		        <!-- <tr class="active">
		          <th scope="row">1</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        </tr>
		        <tr>
		          <th scope="row">2</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        </tr>
		        <tr class="success">
		          <th scope="row">3</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        </tr>
		        <tr>
		          <th scope="row">4</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        </tr>
		        <tr class="info">
		          <th scope="row">5</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        </tr>
		        <tr>
		          <th scope="row">6</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        </tr>
		        <tr class="warning">
		          <th scope="row">7</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        </tr>
		        <tr>
		          <th scope="row">8</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        <tr class="danger">
		          <th scope="row">9</th>
		          <td>student username</td>
		          <td>Complaint</td>
		          <td>open</td>
		        </tr> -->
		      <!-- </tbody> -->
		    </table>
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
