<?php
	
function putData($name,$table_name) {
if(isset($_POST['submit'])){
    require 'dbconnect.php';
	$sql = "INSERT INTO $table_name(DATE,ATTEMPT,FAILURE,SUCCESS,COUNT_OF_CONSENT_PENDING,COUNT_OF_CONSENT_SUCCESS
,UNIQUE_MSISDN,UNIQUE_CONSENT_PENDING_MSISDN,UNIQUE_CONSENT_SUCCESS_MSISDN,CONSENT_SUCCSS_PERCENTAGE,LOCATION_ATTEMPT,LOCATION_FAILURE,LOCATION_SUCCESS,
UNIQUE_LOCATION_SUCCESS_MSISDN,Success_Rate,Phone_Switched_OFF,Out_of_coverage,Total_Success,Total_Success_Rate,CELL_DB_EXCEPTION)
SELECT consent_table.DATE,consent_table.ATTEMPT,consent_table.FAILURE,consent_table.SUCCESS,consent_table.COUNT_OF_CONSENT_PENDING,consent_table.COUNT_OF_CONSENT_SUCCESS
,consent_table.UNIQUE_MSISDN,consent_table.UNIQUE_CONSENT_PENDING_MSISDN,consent_table.UNIQUE_CONSENT_SUCCESS_MSISDN,consent_table.CONSENT_SUCCSS_PERCENTAGE,
location_table.LOCATION_ATTEMPT,location_table.LOCATION_FAILURE,location_table.LOCATION_SUCCESS,
location_table.UNIQUE_LOCATION_SUCCESS_MSISDN,location_table.Success_Rate,location_table.Phone_Switched_OFF,location_table.Out_of_coverage,
location_table.Total_Success,location_table.Total_Success_Rate,location_table.CELL_DB_EXCEPTION
FROM location_table,consent_table
WHERE (location_table.APPLICATION_NAME='$name' AND consent_table.APPLICATION_NAME='$name')";

$query = mysqli_query ($con, $sql);

    if ($query){
        echo "<center><h5>$table_name updated Sucessfully.</h5></center>";
    }
	else{
        echo "Error Occured!";
    }
						}
}

putData("FrieghtTiger","frieghttiger_table"); // call the function
putData("Intugine Technologies","intuginetechnologies_table");
putData("Elixia_Tech","elixia_tech_table");
putData("QTS","qts_table");
putData("Algomatix","algomatix_table");
putData("GLASSWING","glasswing_table");
putData("Cargo","cargo_table");
putData("United_Translogix","united_translogix_table");
putData("FarEyehybasicdemo","fareyehybasicdemo_table");
putData("ITG","itg_table");
putData("QUICK_DIGITAL_DEMO","quick_digital_demo_table");
putData("Caramel","caramel_table");
putData("Intelliplanners","intelliplanners_table");
putData("KrishnasDigital","krishnasdigital_table");
putData("TruckSuvidha","trucksuvidha_table");
putData("GTechDemo","gtechdemo_table");
putData("Pando","pando_table");
?>
