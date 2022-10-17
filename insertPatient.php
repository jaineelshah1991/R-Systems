<?php

include "dbconfig.php";



date_default_timezone_set('America/New_York');
$datetime = date_create()->format('Y-m-d H:i:s');

$conn = mysqli_connect($host, $username, $dbpassword, $dbname) 
      or die("<br>Cannot connect to DB:$dbname on $host\n");



if(isset($_POST["fname"]))
$fname = $_POST["fname"];


if(isset($_POST["lname"]))
$lname = $_POST["lname"];


if(isset($_POST["ssn"]))
$ssn = $_POST["ssn"];


if(isset($_POST["dob"]))
$dob = $_POST["dob"];

if(isset($_POST["cellnumber"]))
$cell = $_POST["cellnumber"];

if(isset($_POST["address"]))
$address = $_POST["address"];


if(isset($_POST["city"]))
$city = $_POST["city"];


if(isset($_POST["state"]))
$state = $_POST["state"];


if(isset($_POST["zipcode"]))
$zipcode = $_POST["zipcode"];

$insert = "INSERT INTO 2021F_patpanka.R_Patient
VALUES (NULL, '$ssn', '$fname', '$lname', '$cell' , '$address', '$city', '$zipcode','$state', '$dob')";

    
        if(mysqli_query($conn,$insert))
        {
          echo "<br>Successfully added new patient";
          echo "<a href = 'doctorhome.php'> Back to Home Page";


        }
        else 
          echo "something wrong in query";

?>
