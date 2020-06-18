<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csvtoxls";
 
 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_GET['export'])){
if($_GET['export'] == 'true'){
$query = mysqli_query($conn, 'select * from qts_table'); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "qts_table_" . date('dmY') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array('DATE','ATTEMPT','FAILURE','SUCCESS','COUNT_OF_CONSENT_PENDING','COUNT_OF_CONSENT_SUCCESS','UNIQUE_MSISDN',
'UNIQUE_CONSENT_PENDING_MSISDN','UNIQUE_CONSENT_SUCCESS_MSISDN','CONSENT_SUCCSS_PERCENTAGE','LOCATION_ATTEMPT','LOCATION_FAILURE',
'LOCATION_SUCCESS','UNIQUE_LOCATION_SUCCESS_MSISDN','Success_Rate','Phone_Switched_OFF','Out_of_coverage','Total_Success',
'Total_Success_Rate','CELL_DB_EXCEPTION');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['DATE'], $row['ATTEMPT'], $row['FAILURE'], $row['SUCCESS'], $row['COUNT_OF_CONSENT_PENDING'],
						  $row['COUNT_OF_CONSENT_SUCCESS'], $row['UNIQUE_MSISDN'], $row['UNIQUE_CONSENT_PENDING_MSISDN'], $row['UNIQUE_CONSENT_SUCCESS_MSISDN'], $row['CONSENT_SUCCSS_PERCENTAGE'],
						  $row['LOCATION_ATTEMPT'], $row['LOCATION_FAILURE'], $row['LOCATION_SUCCESS'], $row['UNIQUE_LOCATION_SUCCESS_MSISDN'], $row['Success_Rate'],
						  $row['Phone_Switched_OFF'], $row['Out_of_coverage'], $row['Total_Success'], $row['Total_Success_Rate'], $row['CELL_DB_EXCEPTION']);
        fputcsv($f, $lineData, $delimiter);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
  }
}
?>
