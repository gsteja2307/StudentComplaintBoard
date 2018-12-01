<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'database.php';

session_start();
if(!isset($_SESSION['name'])) {
    header('Location: STARTWITHLOGIN.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>JBIET COMPLAINT FORM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
<style>
.sel{
  font-size: 0.9em;
  padding: 10px 20px;
  width: 100%;
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
</head>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include 'header.php'; ?>
	</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="inbox">
    	  <h2>Inbox Details</h2>

    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Complaint Form
              <?php
                  if(isset($_GET['result']))
                  {
                    $res2=$_GET['result'];
                    if($res2=='submitted Succesfully'){
                    echo '<p style="color:green;">'.$res2.'</p>';
                  }
                  else{
                    echo '<p style="color:red;">'.$res2.'</p>';
                  }
                }
                ?>
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details to Submit the Complaint
							</div>
							<form role="form" action="complaintformBE.php" class="com-mail">
								<select class='sel' name="typeC" id='typeC'>
                  <option>select</option>
                    <?php
                    $sqloption="SELECT * FROM `type`";

            $result=$conn->query($sqloption);
            echo '<table style="border: 1px solid black;">  <tbody>';
            while($row15=mysqli_fetch_assoc($result))
            {
              $name=$row15['Type_of_complaint'];
              $id=$row15['ID'];
              $_SESSION['typeid']=$id;

              echo ' <option value='.$id.'>'.$name.'</option>';

            }


            echo '</tbody>';

            ?>
                </select>


								<textarea rows="6" name="message" value="Message :" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message </textarea>


								<input type="submit" name='submitcomplaint' value="Send Message">
							</form>
						</div>
					</div>
				</div>

          <div class="clearfix"> </div>
   </div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
<?php include 'footer.php'; ?>
<!--COPY rights end here-->
</div>

<!--slider menu-->
    <?php include 'menubar.php'; ?>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
