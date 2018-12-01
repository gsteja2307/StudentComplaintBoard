<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<style>
.ulclass{
  background-color: #FFF;
  color: Green;
}

ul {
  list-style-type: none;

  cursor: pointer;
}
th,table,td,.table{
  color: black !important;
  border-bottom: 1px solid rgba(0,0,0,0.3);
}
th{
  background-color: rgba(12,77,8,0.5);
  color: black;
}
</style>
</head>
<body>
  <script type="text/javascript">

$(document).ready(function(){

  $( "#formid" ).on( "submit", function( event ) {

      event.preventDefault();
      var resultdisplay=document.getElementById('resultBox');
    $.post("searchbarsubmitajax.php",$("#formid").serialize(),function(result){

      resultdisplay.innerHTML=result;
      });
  });
  });






  function myfuncstudname(x) {
    // alert(x);
var s=document.getElementById('suggesstion-box-stud-name');
// alert(s);
$.post("searchbarajax.php", {keywordstdname:x}, function(result){
  // alert(result);
    s.style.display="block";
    // s.style.position="absolute";
     s.innerHTML=result;
});
}
function diss() {
//$("#serach-box-studentname").val(val);
$("#suggesstion-box-stud-name").hide();
}
function SelectStudent(val) {
$("#serach-box-studentname").val(val);
$("#suggesstion-box-stud-name").hide();
}



function myfuncstaffname(x) {
  // alert(x);
var s=document.getElementById('suggesstion-box-staff-name');
// alert(s);
$.post("searchbarajax.php", {keywordstaffname:x}, function(result){
// alert(result);
  s.style.display="block";
  // s.style.position="absolute";
   s.innerHTML=result;
});
}
function diss2() {
// $("#serach-box-studentname").val(val);
$("#suggesstion-box-staff-name").hide();
}
function SelectStaffName(val) {
$("#serach-box-staffname").val(val);
$("#suggesstion-box-staff-name").hide();
}

function myfuncstdid(x) {
  // alert(x);
var s=document.getElementById('suggesstion-box-std-id');
// alert(s);
$.post("searchbarajax.php", {keywordstdid:x}, function(result){
// alert(result);
  s.style.display="block";
  // s.style.position="absolute";
   s.innerHTML=result;
});
}
function diss3() {
//$("#serach-box-studentname").val(val);
$("#suggesstion-box-std-id").hide();
}
function SelectStudentid(val) {
$("#serach-box-stdid").val(val);
$("#suggesstion-box-std-id").hide();
}

function myfuncstaffid(x) {
  // alert(x);
var s=document.getElementById('suggesstion-box-staff-id');
// alert(s);
$.post("searchbarajax.php", {keywordstaffid:x}, function(result){
// alert(result);
  s.style.display="block";
  // s.style.position="absolute";
   s.innerHTML=result;
});
}
function diss4() {
//$("#serach-box-studentname").val(val);
$("#suggesstion-box-staff-id").hide();
}
function SelectStaffid(val) {
$("#serach-box-staffid").val(val);
$("#suggesstion-box-staff-id").hide();
}

function myfunctypecmpt(x) {
  // alert(x);
var s=document.getElementById('suggesstion-box-typecmpt');
// alert(s);
$.post("searchbarajax.php", {keywordtypecmpt:x}, function(result){
// alert(result);
  s.style.display="block";
  // s.style.position="absolute";
   s.innerHTML=result;
});
}
function diss5() {
//$("#serach-box-studentname").val(val);
$("#suggesstion-box-typecmpt").hide();
}
function Selecttypecmpt(val) {
$("#serach-box-typecmpt").val(val);
$("#suggesstion-box-typecmpt").hide();
}

function myfuncstatus(x) {
  // alert(x);
var s=document.getElementById('suggesstion-box-status');
// alert(s);
$.post("searchbarajax.php", {keywordstatus:x}, function(result){
// alert(result);
  s.style.display="block";
  // s.style.position="absolute";
   s.innerHTML=result;
});
}
function diss6() {
//$("#serach-box-studentname").val(val);
$("#suggesstion-box-status").hide();
}
function SelectStatus(val) {
$("#serach-box-status").val(val);
$("#suggesstion-box-status").hide();
}


function myfuncyear(x) {
  // alert(x);
var s=document.getElementById('suggesstion-box-year');
// alert(s);
$.post("searchbarajax.php", {keywordyear:x}, function(result){
// alert(result);
  s.style.display="block";
  // s.style.position="absolute";
   s.innerHTML=result;
});
}
function diss7() {
//$("#serach-box-studentname").val(val);
$("#suggesstion-box-year").hide();
}
function Selectyear(val) {
$("#serach-box-year").val(val);
$("#suggesstion-box-year").hide();
}





// function mySearchFunc(studname) {
//   // alert(studname);
//   event.preventDefault(); /* Prevent a submit button from submitting a form */
//   var resultdisplay=document.getElementById('resultBox');
// var studNameSubmit=studname;
// // alert(studNameSubmit);
//   $.post("searchbarsubmitajax.php",$("#formid").serialize(),function(result){
// //$.post("searchbarsubmitajax.php",{studNameSubmit:studNameSubmit},function(result){
//   alert(result);
//   resultdisplay.innerHTML=result;
//
// });
//
// }





  </script>
<div id="wrapper">
     <!-- Navigation -->
        <?php include 'adminheader.php'; ?>
        <?php include 'adminmenu.php'; ?>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs container">
       <!-- Search Bar starts ********************** -->
       <form id="formid" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern">
         <fieldset>

           <div class="row">
       <div class="form-group col-md-1" style="display:flex ;padding:0">
         <label class="control-label">Student Name</label>
       </div>
          <div class="form-group col-md-4" style=" ">
         <input  autocomplete="off" onfocus="diss()" onkeyup="myfuncstudname(this.value)" type="text" class="form-control1" id="serach-box-studentname" name="studname" value="">
         <div id="suggesstion-box-stud-name"></div>
         </div>


       <div class="form-group col-md-1" style="display:flex;padding:0 ">
         <label class="control-label">Staff Name</label>
       </div>
          <div class="form-group col-md-4" style="">
         <input autocomplete="off" onfocus="diss2()" onkeyup="myfuncstaffname(this.value)" type="text" class="form-control1" id="serach-box-staffname" name="staffname" value="">
         <div id="suggesstion-box-staff-name"></div>
       </div>
        </div>

        <div class="row">
          <div class="form-group col-md-1" style="display:flex;padding:0 ">
            <label class="control-label">Year</label>
          </div>
             <div class="form-group col-md-3" style=" ">
               <select class="" name="year">
                 <option>Select</option>
                 <option value="1">First</option>
                 <option value="2">Second</option>
                 <option value="3">Third</option>
                 <option value="4">Fourth</option>

               </select>
            <!-- <input type="text" autocomplete="off" id="serach-box-year" onfocus="diss7()" onkeyup="myfuncyear(this.value)" class="form-control1" name="year" value=""> -->
            <div id="suggesstion-box-year"></div>
          </div>
          <div class="form-group col-md-1" style="display:flex;padding:0 ">
            <label class="control-label">Student ID</label>
          </div>
             <div class="form-group col-md-3" style="">
            <input type="text" autocomplete="off" id="serach-box-stdid" onfocus="diss3()" onkeyup="myfuncstdid(this.value)" class="form-control1" name="studid" value="">
            <div id="suggesstion-box-std-id"></div>
          </div>
          <div class="form-group col-md-1" style="display:flex;padding:0 ">
            <label class="control-label">Staff ID</label>
          </div>
             <div class="form-group col-md-3" style=" ;margin-left: -52px; ">
            <input  autocomplete="off" id="serach-box-staffid" onfocus="diss4()" onkeyup="myfuncstaffid(this.value)" type="text" class="form-control1" name="staffid" value="">
            <div id="suggesstion-box-staff-id"></div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-3" style="display:flex ;padding:0">
            <label class="control-label">Type of Complaint</label>
          </div>
             <div class="form-group col-md-3" style="margin-left: -196px; ">
                 <select class="" name="typeid">
                   <option>Select</option>
                   <option value="1">Bus</option>
                   <option value="2">Water</option>
                   <option value="3">Teaching</option>
                   <option value="4">Sports</option>
                 </select>
            <!-- <input autocomplete="off" id="serach-box-typecmpt" onfocus="diss5()" onkeyup="myfunctypecmpt(this.value)" type="text" class="form-control1" name="typeid" value=""> -->
            <div id="suggesstion-box-typecmpt"></div>
          </div>
          <div class="form-group col-md-2" style="display:flex ;padding:0; ">
            <label class="control-label">Status</label>
          </div>
             <div class="form-group col-md-4" style="margin-left: -150px;">
            <input autocomplete="off" id="serach-box-status" onfocus="diss6()" onkeyup="myfuncstatus(this.value)" type="text" class="form-control1" name="status" value="">
            <div id="suggesstion-box-status"></div>
          </div>
     </div>

     <div class="row">
       <div class="form-group col-md-2" style="display:flex ;padding:0 ">
         <label class="control-label">Feedback</label>
       </div>
          <div class="form-group col-md-8" style="display:flex;margin-left: -138px; ">
         <input type="text" class="form-control1" name="feedback" value="">
       </div>
   </div>

        <div class="row">
       <div class="form-group">
         <div class="col-md-4">
         </div>
         <button type="submit" class="btn btn-primary col-md-4" id="submit" name="submit" value="Sign up" onclick="mySearchFunc(document.getElementById('serach-box-studentname').value)">Submit</button>
         <div class="col-md-4">
         </div>
         <!-- <button type="reset" class="btn btn-default">Reset</button> -->
       </div>
         </div>
     </fieldset>
   </form>
   <div id="resultBox">

   </div>


        <!-- Search Bar ends ************************************* -->
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
