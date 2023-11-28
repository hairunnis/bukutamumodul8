<?php
// config.php
$dbhost = 'localhost';
$dbuser = 'id21588515_indah';
$dbpass = 'Nisa15012_';
$dbname = 'id21588515_senja';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysqli_select_db($conn, $dbname);
?>
