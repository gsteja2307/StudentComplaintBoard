<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'database.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Validation :: w3layouts</title>
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
<style media="screen">
table, th, td {
  border: 1px solid black;
}
.signup-block {
    padding: 4em 2em;
}


</style>


</head>
<script type="text/javascript">
function myfunc(x){
  var email=x;
  alert(x);
  $.post("validateemail.php",{email:email},function(result){
    alert(result);
    if (result==1){

      document.getElementById("error").innerHTML = 'Email already exists , try logging in with it or use another email';
      // document.getElementById(id).attribute = new value
      // document.getElementById('emailreg').innerHTML = 'email already registered , use another email';
    }
    else{
document.getElementById("error").innerHTML = '';

    }
  })
}
function myrollnumberfunc(x){
  var rollnumber=x;
  alert(x);
  $.post("validateemail.php",{rollnumber:rollnumber},function(result){
    alert(result);
    if (result==1){

      document.getElementById("error2").innerHTML = 'roll number already exists , try logging in with it or use another';
      // document.getElementById(id).attribute = new value
      // document.getElementById('emailreg').innerHTML = 'email already registered , use another email';
    }
    else{
document.getElementById("error2").innerHTML = '';

    }
  })
}

</script>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <?php include 'adminheader.php'; ?>
            <?php include 'adminmenu.php';  ?>
          </nav>
            <!-- /.navbar-static-side -->

        <div id="page-wrapper">




          <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Validation</h3>
        <?php if(isset($_GET['result']))
          {
            $res=$_GET['result'];
            echo $res;
          }?>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" form role="form" action="signupbyadmin.php" method="get">
          <fieldset>
            <div class="form-group">
              <label class="control-label">UserName</label>

              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="UserName" placeholder="User Name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Email</label>

              <input onblur="myfunc(this.value)" id="emailreg" type="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" name="email" placeholder="Email" required="">
              <p style="color:red;" id="error"></p>
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>

              <input type="password" name="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" placeholder="Password">
            </div>
            <div class="form-group">
              <label  class="control-label">RollNumber</label>
              <input onblur='myrollnumberfunc(this.value)' type="text" class="form-control1" name="RollNUmber" placeholder="RollNUmber" required="">
              <p id='error2' style="color:red;"></p>
            </div>
            <div class="form-group">
              <label class="control-label">Number</label>
              <input type="text" name="PhoneNumber" class="form-control1" placeholder="PhoneNumber" required="">
            </div>
            <!-- <div class="form-group">
              <label class="control-label normal">Date</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
            </div> -->
            <!-- <div class="form-group">
              <div class="checkbox1">
                <label>
                  <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required">
                  Are you a winner?
                </label>
              </div>
            </div> -->

            <div class="form-group">
              <button type="submit" class="btn btn-primary" type="submit" name="Sign-Up" value="Sign up">Submit</button>
              <!-- <button type="reset" class="btn btn-default">Reset</button> -->
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="copy_layout">
      <?php include 'adminfooter.php'; ?>
   </div>
 </div>

      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
