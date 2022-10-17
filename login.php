<?php
if (isset($_COOKIE["userFirstName"]) && isset($_COOKIE["userLastName"]) && isset($_COOKIE["userCustomerID"])) {
    header("Location: landing.php");
    die();
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])  && isset($_POST["password"])) {
    include "dbconfig.php";  // hold db credentials

    // connection to the database
    $con = mysqli_connect($host, $username, $dbpassword, $dbname)
        or die("<br> Cannot connect to DB: $dbname on $host " . mysqli_connect_error());

    // default time zone set to NY
    date_default_timezone_set('America/New_York');

    // get username from user 
    if (isset($_POST["username"]) and isset($_POST["password"])) {
        // get the login from the user
        $login = mysqli_real_escape_string($con, $_POST["username"]);

        // get the password form user 
        $password = mysqli_real_escape_string($con, $_POST["password"]);
    }

    // sql statement to check login with the customer table
    $credentialSQL = "select * FROM 2021F_patpanka.R_StaffCredentials sc, 2021F_patpanka.R_Staff s where sc.sid = s.sid and login = '$login'";

    // connections to the database
    $credentialResult = mysqli_query($con, $credentialSQL);
    $credentialNum = mysqli_num_rows($credentialResult);
    $credentialRow = mysqli_fetch_array($credentialResult);

    // sql statement to check the login with the admin table 
    $adminCredentialSQL = "select * FROM 2021F_patpanka.R_Patient_Credentials pc, 2021F_patpanka.R_Patient p  where pc.patient_id = p.patient_id and login = '$login'";
    // connections to the database
    $adminCredentialResult = mysqli_query($con, $adminCredentialSQL);
    $adminCredentialNum = mysqli_num_rows($adminCredentialResult);
    $adminCredentialRow = mysqli_fetch_array($adminCredentialResult);

     // sql statement to check the login with the admin table 
    $recpCredentialSQL = "Select  * from 2021F_patpanka.R_Staff s, 2021F_patpanka.R_StaffCredentials sc where sc.sid = s.sid and login = 'juan' ";
     // connections to the database
     $recpCredentialResult = mysqli_query($con, $recpCredentialSQL);
     $recpCredentialNum = mysqli_num_rows($recpCredentialResult);
     $recpCredentialRow = mysqli_fetch_array($recpCredentialResult);
 

    // check to see if the query results are coming from the admin table or user table 
    // based on the output the user is directed to the proper page admin or user 
    if ($credentialNum > 0) {
        // validating password for users
        if ($credentialRow["password"] == $password && $credentialRow["position"] == "doctor") {

            header("location:doctorhome.php");
        } else if ($credentialRow["password"] == $password && $credentialRow["position"] == "reception") {

            header("location: reception.php");
        }

    } else if ($adminCredentialNum > 0) {
        // validating password for admin
        if ($adminCredentialRow["password"] == $password) {

    
            header("location: patient.php");
        } else {
            header("location: login.html");
        }
    } else if (recpCredentialNum > 0)
    {
        if($recpCredentialRow["password"] == $password)
            header("location: reception.php ");
    }
    
    else {


        header("location: login.html");
    }
}
?>

