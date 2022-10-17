<?php

include "dbconfig.php";

date_default_timezone_set('America/New_York');
$datetime = date_create()->format('Y-m-d H:i:s');

$conn = mysqli_connect($host, $username, $dbpassword, $dbname) 
      or die("<br>Cannot connect to DB:$dbname on $host\n");



if(isset($_GET['pName']))
    $name = $_GET['pName'];

 		


$sql3 = "select * from 2021F_patpanka.R_Patient where first_name like concat('%','$name','%') or last_name like concat('%','$name','%')";
$result3 = mysqli_query($conn, $sql3);
$numRows3=mysqli_num_rows($result3);

if ($result3) {
    if (mysqli_num_rows($result3)>0) {
         echo "<TABLE border=1>\n";
         echo "<TR><TH>ID<TH>SSN<TH>First Name<TH>Last Name<TH>Cell Num<TH>Address<TH>City<TH>Zipcode<TH>State<TH>DOB</TH>\n";
         while($row3 = mysqli_fetch_array($result3)){
            $id = $row3["patient_id"];
            $ssn = $row3["ssn"];
            $fname = $row3["first_name"];
            $lname = $row3["last_name"];
            $tel = $row3["TEL"];
            $address = $row3["address"];
            $city = $row3["city"];
            $zipcode = $row3["zipcode"];
            $state = $row3["state"];
            $dob = $row3["dob"];


            echo "<TR><TD>$id</TD>
            <TD>$ssn</TD>
            <TD>$fname</TD>
            <TD>$lname</TD>
            <TD>$tel</TD>
            <TD>$address</TD>
            <TD>$city</TD>
            <TD>$zipcode</TD>
            <TD>$state</TD>
            <TD>$dob</TD>";


         }
        }
    }

    echo "</TABLE>\n";


    


?>