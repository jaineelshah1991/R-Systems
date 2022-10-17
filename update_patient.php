<?php 
//session_start(); 
$cusid = 1;
setcookie("patient_id", $cusid,time()+10*60);
 $patient_id = $_COOKIE["patient_id"];
include "dbconfig.php";
// if(isset($_COOKIE["patient_id"])) { 


//  $con=mysqli_connect($server,$ssn,$dbpassword,$dbname)
 $con=mysqli_connect($host, 'patpanka', $dbpassword, $dbname)
//or die("<br>Cannot connect to DB\n");
//$query ="select patient_id,ssn,password,first_name,last_name,TEL,address,city,zipcode, state from 2021F_cardonju.patient";
//$result = mysqli_query($con, $query); 
?>
<style>
    .form-style-2 input[type=submit],
.form-style-2 input[type=button]{
  border: none;
  padding: 8px 15px 8px 15px;
  background: #FF8500;
  color: #fff;
  box-shadow: 1px 1px 4px #DADADA;
  -moz-box-shadow: 1px 1px 4px #DADADA;
  -webkit-box-shadow: 1px 1px 4px #DADADA;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
  background: #EA7B00;
  color: #fff;
}
</style>
<link rel="stylesheet" type = "text/css" href="css6/style.css"> 
    
<form action='update_action.php' method='post'>

    <?php
    echo "<table width = '800'align right border='1' cellpadding='1' cellspacing='1'>

        <tr>

            <th><font color = 'black'>Patient ID</font></th>
            <th><font color = 'black'>ssn ID</font></th>
            
            <th><font color = 'black'>First Name</font></th>
            <th><font color = 'black'>Last Name</font></th>
            <th><font color = 'black'>TEL</font></th>
            <th><font color = 'black'>Address</font></th>
            <th><font color = 'black'>City</font></th>
            <th><font color = 'black'>Zip Code</font></th>
            <th><font color = 'black'>State</font></th>
        </tr>";

    
    ?>
<div class = "main">
   

<a href='logout.php'>Logout</a>

</div>
    <?php  
    
    echo "<form action='update_action.php' method='post'>\n";
include "dbconfig.php";

$query = "SELECT * FROM 2021F_patpanka.R_Patient where patient_id =$patient_id" ;
$result1 = mysqli_query($con,$query);
$row1 = mysqli_fetch_array($result1);

//$count = mysqli_num_rows($result1);

if($result1 = mysqli_query($con, $query)){
     if(mysqli_num_rows($result1) > 0){
        
        while($row1 = mysqli_fetch_assoc($result1)){

            $patient_id=$row1['patient_id'];
            $ssn= $row1['ssn'];
            // $upassword= $row1['password'];    
            $first_name= $row1['first_name'];
            $last_name= $row1['last_name'];
            $TEL= $row1["TEL"];
            $address= $row1['address'];
            $city= $row1['city'];
            $zipcode= $row1['zipcode'];
            $state= $row1['state'];


       //echo "<input type='hidden' name='upassword' value='$upassword'><input type='hidden' name='first_name[$i]' value='$first_name'><input type='hidden' name='last_name[$i]' value='$last_name'><input type='hidden' name='TEL[$i]' value='$TEL'><input type='hidden' name='address[$i]' value='$address'><input type='hidden' name='city[$i]' value='$city'><input type='hidden' name='zipcode[$i]' value='$zipcode><input type='hidden' name='state[$i]' value='$state'>'\n";
       //<td><input type='text' value='$state' name='state'></td>";
            echo"<tr>";
            echo"<td bgcolor='yellow'><font color = 'black'>".$patient_id."</font></td>";
            echo"<td bgcolor='yellow'><font color = 'black'>".$ssn."</font></td>";

            echo"<td><input type='text' value='$first_name' name='first_name'></td>";
            echo"<td><input type='text' value='$last_name' name='last_name'></td>";
            echo"<td><input type='text' value='$TEL' name='TEL'></td>";
            echo"<td><input type='text' value='$address' name='address'></td>";
            echo"<td><input type='text' value='$city' name='city'></td>";
            echo"<td><input type='text' value='$zipcode' name='zipcode'> </td>";
            echo"
            <td><select name='State[]'>
<OPTION value='AL'>Alabama</OPTION>
<OPTION value='AK'>Alaska</OPTION>
<OPTION value='AZ'>Arizona</OPTION>
<OPTION value='AR'>Arkansas</OPTION>
<OPTION value='CA'>California</OPTION>
<OPTION value='CO'>Colorado</OPTION>
<OPTION value='CT'>Connecticut</OPTION>
<OPTION value='DE'>Delaware</OPTION>
<OPTION value='FL'>Florida</OPTION>
<OPTION value='GA'>Georgia</OPTION>
<OPTION value='HI' selected>Hawaii</OPTION>
<OPTION value='ID'>Idaho</OPTION>
<OPTION value='IL'>Illinois</OPTION>
<OPTION value='IN'>Indiana</OPTION>
<OPTION value='IA'>Iowa</OPTION>
<OPTION value='KS'>Kansas</OPTION>
<OPTION value='KY'>Kentucky</OPTION>
<OPTION value='LA'>Louisiana</OPTION>
<OPTION value='ME'>Maine</OPTION>
<OPTION value='MD'>Maryland</OPTION>
<OPTION value='MA'>Massachusetts</OPTION>
<OPTION value='MI'>Michigan</OPTION>
<OPTION value='MN'>Minnesota</OPTION>
<OPTION value='MS'>Mississippi</OPTION>
<OPTION value='MO'>Missouri</OPTION>
<OPTION value='MT'>Montana</OPTION>
<OPTION value='NE'>Nebraska</OPTION>
<OPTION value='NV'>Nevada</OPTION>
<OPTION value='NH'>New Hampshire</OPTION>
<OPTION value='NJ'>New Jersey</OPTION>
<OPTION value='NM'>New Mexico</OPTION>
<OPTION value='NY'>New York</OPTION>
<OPTION value='NC'>North Carolina</OPTION>
<OPTION value='ND'>North Dakota</OPTION>
<OPTION value='OH'>Ohio</OPTION>
<OPTION value='OK'>Oklahoma</OPTION>
<OPTION value='OR'>Oregon</OPTION>
<OPTION value='PA'>Pennsylvania</OPTION>
<OPTION value='RI'>Rhode Island</OPTION>
<OPTION value='SC'>South Carolina</OPTION>
<OPTION value='SD'>South Dakota</OPTION>
<OPTION value='TN'>Tennessee</OPTION>
<OPTION value='TX'>Texas</OPTION>
<OPTION value='UT'>Utah</OPTION>
<OPTION value='VT'>Vermont</OPTION>
<OPTION value='VA'>Virginia</OPTION>
<OPTION value='WA'>Washington</OPTION>
<OPTION value='WV'>West Virginia</OPTION>
<OPTION value='WI'>Wisconsin</OPTION>
<OPTION value='WY'>Wyoming</OPTION>
></td>";

    echo "</tr>"; 
            
       // $i++; 




        }
?>
        
 <?php
        echo "</TABLE>\n";

?>

    <label><span></span><input type='submit' value='Update my profile'></label>

</form> 
<?php

echo "</form>\n";
    } else {
        echo "<br>No records in the database.\n";
        mysqli_free_result($result1);
    }
 } else {
 echo "<br>Something wrong with the SQL query.\n";
 echo "<br>Error:" . mysqli_error($con); 

 }

// }
// else { 
//     echo "please login first; click on the "; 
    


    ?>
<a href='doctorhome.php'>Homepage</a>

    <?php



// }
//     session_unset(); 
//     session_destroy(); 
//    $_SESSION['first_name']=$first_name;

//    echo "$patient_id";
//    echo "$zipcode";
//    echo "$upassword";
//    echo "$first_name";
//    echo "$last_name";
//    echo "$TEL";
//    echo "$address";
//    echo "$city";
?>


<br><a href='doctorhome.php'>project home page</a>

<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./images/Logo.ico" />
    <title>Update Patient</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/css/form.css">
</head>
<body style="background-color:BurlyWood; border:20px groove purple;border-radius:.25rem;max-width:auto;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#6c757d}code{font-size:87.5%;color:rgb(63, 205, 75);word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:red;" class=" d-flex flex-column justify-content-between">
    
</body>

</html>