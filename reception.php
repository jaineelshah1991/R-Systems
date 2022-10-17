<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/product.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>

<body style="background-color:BurlyWood; border:20px groove purple;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#6c757d}code{font-size:87.5%;color:rgb(63, 205, 75);word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:red;" class="min-vh-100 d-flex flex-column justify-content-between">


<div class="container">
        <div class="store-heading d-flex flex-column justify-content-center align-items-center">
            <h1>Home Page</h1>
            <h1>Welcome Receptionist</h1>
        </div>




<a href='login.html'class="button button1">Logout</button>
<a href='newapprec.php'class="button button1">New Appointment</button>
<a href='viewhistory.php'class="button button1">View History</button>


<!--
<button class="button button1">Logout</button>
<button class="button button1">New Patient</button>
<button class="button button1">Find Patient</button>
<button class="button button1">Update Patient Information</button>
<button class="button button1">New Appointment</button>
-->
<br>


    <div class="alert-container">
        <?php
        if (isset($_SESSION)) {
            if (isset($_SESSION["flash"])) {
                echo '<div class="store-alert alert-${type}">
            <span class="text-white">$_SESSION["flash"]</span>
        </div>';
            }
        }
        ?>
    </div>
    


        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./public/js/cart.js"></script>
    <script src="./public/js/navbar.js"></script>
</body>

</html>