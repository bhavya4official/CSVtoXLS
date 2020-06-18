<?php

if(isset($_POST['submit'])){
    require 'dbconnect.php';
	$sql = "Delete from pando where date=0";

$query = mysqli_query ($con, $sql);

    if ($query){
        echo "<center><h5>Sum Row Delete.</h5></center>";
    }
	else{
        echo "Sum Row Error Occured!";
    }
}		
?>
