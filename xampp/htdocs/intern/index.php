<?php

echo "hi, this is my first php page";
echo "<h1 style='color:red'>hi, this is my first php page</h1>";
echo "<p><a href=https://www.google.com>click me to go to google</a></p>";
$num=1;
if($num==1){
  echo "the loop starts at ".$num;
}
echo "<p></p> ";
while($num<11){

Printme($num);
  $num++;
}

function Printme($value)
{
switch ($value) {
  case '1':
            echo "in first<br>";
    break;
  case '2':
            echo "in second<br>";
    break;
  case '3':
            echo "in third<br>";
    break;
  case '4':
            echo "in fourth<br>";
    break;

  default:
      echo "in defualt ".$value."<br>";
    break;
}


//echo "in print me fun<br>";
  //echo $value. "<br>";
}



echo '<p>NUM IS 11</p>';
echo "SUBTRACTING WITH 5 WE GET=".$sub=$num-5;
echo '<p>NUM IS 11</p>';
echo "MULTIPLYING WITH 5 WE GET=".$sub=$num*5;


?>
<!-- operatoors X
fun
loop X
conditional X
switch  -->
