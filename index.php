<?php
if(isset($_POST['submit'])){
    require 'dbconnect.php';
 
    $file = $_FILES['file1']['tmp_name'];
    $handle = fopen($file,"r" );
    $c = 0 ; 
 
    while (($csvData = fgetcsv($handle,1000,"|")) !== false ){
$DATE = $csvData[0];
$APPLICATION_NAME = $csvData[1];
$LOCATION_ATTEMPT=$csvData[2];
$LOCATION_FAILURE=$csvData[3];
$LOCATION_SUCCESS=$csvData[4];
$UNIQUE_LOCATION_SUCCESS_MSISDN=$csvData[5];
$Success_Rate=$csvData[6];
$Phone_Switched_OFF=$csvData[7];
$Out_of_coverage=$csvData[8];
$Location_information_is_not_available=$csvData[9];
$Subscriber_can_be_out_of_country=$csvData[10];
$Total_Success=$csvData[11];
$Total_Success_Rate=$csvData[12];
$CELL_DB_EXCEPTION=$csvData[13];
$sql = "INSERT INTO location_table(DATE,APPLICATION_NAME,LOCATION_ATTEMPT,LOCATION_FAILURE,LOCATION_SUCCESS,UNIQUE_LOCATION_SUCCESS_MSISDN
,Success_Rate,Phone_Switched_OFF,Out_of_coverage,Location_information_is_not_available,Subscriber_can_be_out_of_country,Total_Success,Total_Success_Rate,CELL_DB_EXCEPTION)
VALUES ('$DATE', '$APPLICATION_NAME','$LOCATION_ATTEMPT','$LOCATION_FAILURE','$LOCATION_SUCCESS','$UNIQUE_LOCATION_SUCCESS_MSISDN','$Success_Rate',
'$Phone_Switched_OFF','$Out_of_coverage','$Location_information_is_not_available','$Subscriber_can_be_out_of_country','$Total_Success','$Total_Success_Rate','$CELL_DB_EXCEPTION')";
$query = mysqli_query ($con, $sql);
$c = $c + 1 ;
}
    if ($query){
        echo "<center><h2>Location Csv data uploaded Sucessfully.</center>";
    }else{
        echo "Location CSV Error Occured";
    }
}

?>

<?php
if(isset($_POST['submit'])){
    require 'dbconnect.php'; 
    $file = $_FILES['file2']['tmp_name'];
    $handle = fopen($file,"r" );
    $c = 0 ; // define row count flag
  while (($csvData = fgetcsv($handle,1000,"|")) !== false ){
$DATE = $csvData[0];
$APPLICATION_NAME= $csvData[1];
$ATTEMPT=$csvData[2];
$FAILURE=$csvData[3];
$SUCCESS=$csvData[4];
$COUNT_OF_CONSENT_PENDING=$csvData[5];
$COUNT_OF_CONSENT_SUCCESS=$csvData[6];
$UNIQUE_MSISDN=$csvData[7];
$UNIQUE_CONSENT_PENDING_MSISDN=$csvData[8];
$UNIQUE_CONSENT_SUCCESS_MSISDN=$csvData[9];
$CONSENT_SUCCSS_PERCENTAGE=$csvData[10];
$sql = "INSERT INTO consent_table(DATE,APPLICATION_NAME,ATTEMPT,FAILURE,SUCCESS,COUNT_OF_CONSENT_PENDING,COUNT_OF_CONSENT_SUCCESS,UNIQUE_MSISDN
,UNIQUE_CONSENT_PENDING_MSISDN,UNIQUE_CONSENT_SUCCESS_MSISDN,CONSENT_SUCCSS_PERCENTAGE)
VALUES ('$DATE','$APPLICATION_NAME','$ATTEMPT','$FAILURE','$SUCCESS','$COUNT_OF_CONSENT_PENDING','$COUNT_OF_CONSENT_SUCCESS',
'$UNIQUE_MSISDN','$UNIQUE_CONSENT_PENDING_MSISDN','$UNIQUE_CONSENT_SUCCESS_MSISDN','$CONSENT_SUCCSS_PERCENTAGE')";
$query = mysqli_query ($con, $sql);
$c = $c + 1 ;
}
    if ($query){
        echo "<center><h2>CONSENT CSV data uploaded Sucessfully.</center>";
    }else{
        echo "CONSENT Error Occured";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Navigation.css">
</head>
<body>

<form enctype="multipart/form-data" name="form1" method="post" action="Navigation.php" role="form">
<center><table border="3" bordercolor=black>
<tr>
<td colspan="2" align="center"><strong style="color:Blue;"><h3>Import CSV file</h3></strong></td>
</tr>
<tr>
<td align="center"><h3><strong>Location CSV File:</h3><strong></td><td><input type="file" class="clr" name="file1" id="file1"></td>
</tr> 
<tr>
<td align="center"><h3><strong>Consent CSV File:</h3><strong></td><td><input type="file"class="clr" name="file2" id="file2"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" class="clr" value="submit" name="submit" >  </td>
</tr>
<tr>
<td colspan="2" align="center"> 
<h3 style="color:#d40a0a;">Download CSV of Companies</h3>

  <input type="submit" class="clr"formaction="algomatixfile.php?export=true"  value="Algomatix">
  <input type="submit" class="clr" formaction="caramelfile.php?export=true"  value="Caramel">
  <input type="submit" class="clr" formaction="cargo.php?export=true"  value="Cargo"> 
 <input type="submit" class="clr" formaction="elixia_techfile.php?export=true"  value="Elixia_tech">
<input type="submit" class="clr" formaction="fareyehybasicdemofile.php?export=true"  value="Fareyehybasicdemo">
<input type="submit" class="clr" formaction="frieghttigerfile.php?export=true"  value="Frieghttiger">
<input type="submit" class="clr" formaction="glasswingfile.php.php?export=true"  value="Glasswing">
<input type="submit" class="clr" formaction="gtechdemofile.php?export=true"  value="Gtechdemo">
<input type="submit" class="clr" formaction="intelliplannersfile.php?export=true"  value="Intelliplanners"><br><br>
<input type="submit" class="clr" formaction="intuginetechnologiesfile.php?export=true"  value="Intuginetechnologies">
<input type="submit" class="clr" formaction="itgfile.php?export=true"  value="ITG">
<input type="submit" class="clr" formaction="krishnasdigitalfile.php?export=true"  value="Krishnasdigital">
<input type="submit" class="clr" formaction="pandofile.php?export=true"   value="Pando">
<input type="submit" class="clr" formaction="qtsfile.php?export=true"  value="QTS">
<input type="submit" class="clr" formaction="quickdigitaldemofile.php?export=true"  value="Quick_digital_demo">
<input type="submit" class="clr" formaction="trucksuvidhafile.php?export=true"  value="Trucksuvidha">
<input type="submit" class="clr" formaction="united_translogixfile.php?export=true"  value="United_translogix"><br><br>

</td>
</tr>
</table></center><br><br><br>

</form>
<?php include'table_maker.php';?>
<?php include'Sumreport.php';?>



</body>
</html>
