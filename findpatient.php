<?php
include "dbconfig.php";


echo "<a href='login.html'>logout</a>\n";
echo "<a href='doctorhome.php'>Go Back</a>\n";
echo "<br><b> Search for Patient by Name </b>";
echo "<form action='show_patient.php' method='get' required='required'>";
echo "Name: <input type='text' size = 20 name='name' required>";

echo "<br><input type='submit' value='Submit'>";
echo "</form>";
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="./images/Logo.ico" />
    <title>Find Patient</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/css/form.css">
</head>
<body style="background-color:BurlyWood; border:20px groove purple;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#6c757d}code{font-size:87.5%;color:rgb(63, 205, 75);word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:red;" class=" d-flex flex-column justify-content-between">
</body>

</html>