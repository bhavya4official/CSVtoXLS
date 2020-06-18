<?php
function sumData($t_name) {
if(isset($_POST['submit'])){
    require 'dbconnect.php';
	$sql = "INSERT INTO $t_name
SELECT 0,sum(ATTEMPT),sum(FAILURE),sum(SUCCESS),sum(COUNT_OF_CONSENT_PENDING),sum(COUNT_OF_CONSENT_SUCCESS)
,sum(UNIQUE_MSISDN),sum(UNIQUE_CONSENT_PENDING_MSISDN),sum(UNIQUE_CONSENT_SUCCESS_MSISDN),sum(CONSENT_SUCCSS_PERCENTAGE),
sum(LOCATION_ATTEMPT),sum(LOCATION_FAILURE),sum(LOCATION_SUCCESS),
sum(UNIQUE_LOCATION_SUCCESS_MSISDN),sum(Success_Rate),sum(Phone_Switched_OFF),sum(Out_of_coverage),
sum(Total_Success),sum(Final_Success_Rate),sum(CELL_DB_EXCEPTION)
FROM $t_name";

$query = mysqli_query ($con, $sql);

    if ($query){
        echo "<center><h5>$t_name updated Sucessfully.</h5></center>";
    }
	else{
        echo "Error Occured!";
    }
}		
}

sumData("frieghttiger"); // call the function
sumData("intuginetechnologies");
sumData("elixia_tech");
sumData("qts");
sumData("algomatix");
sumData("glasswing");
sumData("cargo");
sumData("united_translogix");
sumData("fareyehybasicdemo");
sumData("itg");
sumData("quick_digital_demo");
sumData("caramel");
sumData("intelliplanners");
sumData("krishnasdigital");
sumData("trucksuvidha");
sumData("gtechdemo");
sumData("pando");
?>

