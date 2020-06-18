<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'csvtoxls';
$con = mysqli_connect( $host , $user, $password ) or die ( 'Could not connect to server' . mysqli_error ($con) );
mysqli_select_db( $con , $db ) or die ( 'Could not connect to database' . mysqli_error ($con) );
?>