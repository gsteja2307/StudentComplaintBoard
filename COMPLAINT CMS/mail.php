<?php
$to = "gsuryateja05@gmail.com";
$subject = "Test email";

$message = "
<html>
<head>
<title>details</title>
</head>
<body>
<p>Our top employees</p>
<img src='https://image.shutterstock.com/image-vector/happy-smiley-emoticon-face-260nw-123417493.jpg' alt='Smiley face' height='42' width='42'>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
<tr>
<td>Vijay</td>
<td>G</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <admin@complaintboardjbiet.com>' . "\r\n";


$mail=mail($to,$subject,$message,$headers);
if($mail)
{
    echo 'mail sent';
}
else
{
   echo "not sent";
}
?>
