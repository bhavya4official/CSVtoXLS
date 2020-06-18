<?php

if(isset($_POST['check']))
{
    // id to search
    $num = $_POST['number'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","IVR");
    
    // mysql search query
    $query = "SELECT `Status` FROM `IVRDATA` WHERE `S_MSISDN` = $num LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $status = $row['Status'];
        
      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Number not found.";
            $status = "";
          
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $status = "";
    
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP FIND DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

    <form action="ivr.php" method="post">

        Number: <input type="number" name="number"><br><br>

        Status:<input type="text" name="status" value="<?php echo $status;?>"><br>
<br>

        <input type="submit" name="check" value="Find">

           </form>

    </body>

</html>