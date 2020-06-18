<?php
$host = 'http://172.16.61.74/';
$user = 'admin';
$password = 'telenity@123';
$db = 'telenity_report';
$con = mysqli_connect( $host , $user, $password ) or die ( 'Could not connect to server' . mysqli_error ($con) );
mysqli_select_db( $con , $db ) or die ( 'Could not connect to database' . mysqli_error ($con) );
?>