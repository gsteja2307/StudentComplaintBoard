<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>ADMIN LOGIN</title>
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
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <h3 style="color:teal">ADMIN LOGIN PAGE</h3>
    <?php
        if(isset($_GET['result2']))
        {
          $res2=$_GET['result2'];
          echo '<p style="color:gold;">'.$res2.'</p>';
        }
      ?>
    <!-- <a href="index.html"><img src="images/logo.png" alt=""/></a> -->
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form role="form" action="logincheck.php" method="post">
		<input name='admin-email' type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input name='admin-password' type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" name='login' value="Login"></div>
		<!-- <div class="login-social-link">
          <a href="index.html" class="facebook">
              Facebook
          </a>
          <a href="index.html" class="twitter">
              Twitter
          </a>
        </div> -->
		<ul class="new">
			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
			<li class="new_right"><p class="sign">NOT ADMIN?<a href="http://localhost/complaint cms/STARTWITHLOGIN.php"> GO HERE!!</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; @ 1998 JBIET. All Rights Reserved |  </p>
   </div>
</body>
</html>
