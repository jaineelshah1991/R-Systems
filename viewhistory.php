<?php

include "dbconfig.php";



date_default_timezone_set('America/New_York');
$datetime = date_create()->format('Y-m-d H:i:s');

$conn = mysqli_connect($host, $username, $dbpassword, $dbname) 
      or die("<br>Cannot connect to DB:$dbname on $host\n");



$sql3 = "select * from 2021F_patpanka.R_history where patient_id = 10"; 
$result3 = mysqli_query($conn, $sql3);
$numRows3=mysqli_num_rows($result3);
     
if ($result3) {
    if (mysqli_num_rows($result3)>0) {
         echo "<TABLE border=1>\n";
         echo "<TR><TH>Date<TH>History</TH>\n";
         while($row3 = mysqli_fetch_array($result3)){
         $date = $row3["date"];
         $history =$row3['history'];
         }

        }

        echo "<TR><TD>$date</TD>
        <TD>$history</TD>";

    }


?>