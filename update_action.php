<HTML>
<a href='logout.php'>User logout</a><br>
Successfully update Information: 
<br><br>
</HTML>



<?php 




if(!isset($_COOKIE['patient_id'])) { 
die("Error Message.  Log IN First");
}
//con=mysqli_connect($server,$ssn,$password,$dbname)

//or die("<br>Cannot connect to DB\n");

//echo "$patient_id";
//echo "$ssn";
// echo "$zipcode";
// echo "$upassword";
// echo "$first_name";
// echo "$last_name";
// echo "$TEL";
// echo "$address";
// echo "$city";
//echo "$state";
else{
	


	include "dbconfig.php";
	$con=mysqli_connect($host, 'patpanka', $dbpassword, $dbname);


	//session_start(); 
	//$first_name = $_SESSION["first_name"];
	//$ssn= $_POST['ssn']; 
	$upassword= $_POST['upassword'];    
	$first_name= $_POST['first_name'];
	$last_name= $_POST['last_name'];
	$TEL= $_POST['TEL'];
	$address= $_POST['address'];
	$city= $_POST['city'];
	$zipcode = $_POST['zipcode'];
	$state= $_POST['state'];

	$patient_id = $_COOKIE['patient_id'];


	// $query = "SELECT * FROM 2021F_patpanka.R_Patient where patient_id =$patient_id" ;


	$sql = "update 2021F_patpanka.R_Patient  set first_name = '$first_name',
	last_name='$last_name',tel='$TEL',address='$address',city='$city',zipcode='$zipcode', state='$state'
	where patient_id=$patient_id";
	
	//mysqli_query($con, $sql);
	
	if (mysqli_query($con, $sql)) {
		echo "New record created successfully";
		header('REFRESH: 1; URL=update_patient.php');
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	
	mysqli_close($con);
	}
echo $patient_id;



?>





