<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();
$sessionid=$_SESSION['id']; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
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
<script src="js/jquery-

2.1.1.min.js"></script>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
<style media="screen">
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
</head>
<body>

  <script type="text/javascript">
  el =document.getElementById("responsegghg")
  if(el){
    el.addEventListener("change", statusupdate(el.value,$sessionid,));
  }
    // document.getElementById("demo").innerHTML = "Hello World";



</script>
  <script type="text/javascript">
  function startsolve(feed,std,typ){

  var std=std;
  var fbk=feed;
  var typ=typ;
  $.post("feedbackajax.php",{std:std,fbk:feed,typ:typ},function(result){
    (result);
  })



  }
function feedbackupd(feed,std,typ){
  alert("feedbackupd");
  // document.getElementById('feedback12').style.display = 'inline';
  if (feed==1){
    var feed2='accepted';
    startsolve(feed2,std,typ);
    break;

  }
  else {



var std=std;
var fbk=document.getElementById('inputfeed').innerHTML;
var typ=typ;
alert("abcd");
$.post("feedbackajax.php",{std:std,fbk:fbk,typ:typ},function(result){
  alert(result);

});
}

  }

  function statusupdate(response23,type,student) {
    if (response23==1){
      alert('hi');
      response=1;
    }
    else if(response23==2){
      alert('hi 2');
      response=3;
    }
    var responsenum=response23;
    var typenum=type;
    var studentnum=student;
    alert(" in js fun");
    $.post("ajax_statusupdate.php",{responsenum:responsenum,typenum:type,studentnum:student},  function(result){
       alert(result);
       // header('Location: http://localhost/complaint%20cms/feedback.php');
   });
  }

  </script>

<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include 'staffheader.php';?>
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
    	  <h2>Inbox</h2>

    	 <div class="col-md-12 mailbox-content  tab-content tab-content-in">
    	 	<div class="tab-pane active text-style" id="tab1">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                       <div class="clearfix"> </div>
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Complaint Type</th>
                        <th>Complaint </th>
                        <th>Status </th>
                        <th>staff response</th>
                        <th id="feedback1" style="display:none;">Feedback</th>

                        <!-- ************(content for table) -->
                        <?php
                        include 'database.php';


$sql9="SELECT  *,s.UserName sname  FROM complaint c JOIN student s on c.Student_ID=s_id join staff z on c.Staff_assigned=z.ID where z.ID=$sessionid and Process=5 ";
                        $result=$conn->query($sql9);
                        $typename='problemtype';
                        $i=1;


                        while($row=mysqli_fetch_assoc($result))
                        {
                          if($row['Staff_assigned']!=''){
                          $namenum7=$row['Staff_assigned'];
                          $sqlstaffname="SELECT * FROM `staff` WHERE ID=$namenum7";
                          $resultstaff=$conn->query($sqlstaffname);
                          $newrow=mysqli_fetch_assoc($resultstaff);
                          $name7=$newrow['UserName'];
                        }
                        else{
                          $name7='not assigned';
                        }
                          switch($row['type']){
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
                          switch($row['Process']){
                            case 0:
                            $process='Not Attended Yet,Please wait for your turn';
                            break;
                            case 1:
                            $process='Processing';
                            break;
                            case 2:
                            $process='Rejected';
                            break;
                            case 3:
                            $process='Resolved and waiting for Feedback';
                            break;
                            case 4:
                            $process='Accepted';
                            break;
                            case 5:
                            $process='Issue solved and problem is closed';
                            break;
                          }

                        $name2=$row['UserName'];
                        $nameuser12=$row['s_id'];
                        $reply='processing';
                          echo "  <tr>
                          <td>".$i." </td>
                          <td>".$row['sname']." </td>
                          <td> ".$row['s_id']."  </td>
                           <td>".$typename." </td>
                            <td>".$row['Complaint']."  </td>
                            <td>".$process."</td>
                             <td><select class='sel dropdown' name='responsegghg' id='responsegghg' onchange='statusupdate(this.value,".$typevalue.",".$nameuser12.")'>
                           <option>select</option>
                           <option value='1'>Accepted</option>
                           <option value='3'>Resolved, Give Feedback</option></td>
                           <td id='feedback12'><input style='display:none' id='inputfeed' value='accepted' onchange='feedbackupd(this.value,".$row['s_id'].",".$typevalue.")'></td></tr>";
                            $i++;
                        }




                        ?>
<!-- *********************************************************************** -->

	                    </tbody>

	                </table>
	               </div>
               </div>
               <div class="tab-pane text-style" id="tab2">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                       <div class="clearfix"> </div>
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>

	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                            	<input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                02 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Adobe
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                15 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                14 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                11 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                20 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                           <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                25 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                26 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                28 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
	               </div>
               </div>
               <div class="tab-pane text-style" id="tab3">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                       <div class="clearfix"> </div>
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>

	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                            	<input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                02 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Adobe
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>
	                            <td class="hidden-xs">
	                                Google
	                            </td>
	                            <td>
	                                Lorem Ipsum is simply
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                12 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                16 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
	               </div>
               </div>
               <div class="tab-pane text-style" id="tab4">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                       <div class="clearfix"> </div>
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Adobe
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>
	                            <td class="hidden-xs">
	                                Google
	                            </td>
	                            <td>
	                                Lorem Ipsum is simply
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                12 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                16 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
	               </div>
               </div>
               <div class="tab-pane text-style" id="tab5">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                       <div class="clearfix"> </div>
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                20 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                           <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                25 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                26 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                28 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                16 march
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
	               </div>
               </div>
            </div>
          <div class="clearfix"> </div>
   </div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<!--COPY rights end here-->
</div>

<!--slider menu-->
    <?php include 'staffmenu.php'; ?>
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
