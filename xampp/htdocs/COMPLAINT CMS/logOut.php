<?php
session_start();
echo 'session exist';
echo $_SESSION['name'];
session_destroy();
echo "session destroyed";
echo $_SESSION['name'];
header('Location: STARTWITHLOGIN.php');
?>
