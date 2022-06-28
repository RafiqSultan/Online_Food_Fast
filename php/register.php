<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include('../connection/connect.php');
if(isset($_POST['submit'])){
$userName=$_POST['username'];
$fullName=$_POST['fullname'];
$userEmail=$_POST['email'];
$userPhone=$_POST['phone'];
$userPassword=$_POST['password'];
$userConfirmPassword=$_POST['cpassword'];
$userDeliveryAddresss=$_POST['address'];

    if(empty($userName) && empty($fullName) &&empty($userEmail) && empty($userPassword) && empty($userConfirmPassword))
    {
        echo "<Script>alertify.success('Success message');</Script> ";
    }
    else{
        
    }
    

    
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" href="../images/img/pimg.jpg">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet"> -->
    <!-- Alert Notifction  -->
    <link  href="../css/alertify.css" rel="stylesheet">
    <link  href="../css/alertify.default.css" rel="stylesheet">
    <link  href="../css/login.css" rel="stylesheet">
    <link  href="../css/login.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="Home">

    <!--=======================
        * Header Section 
    ==========================-->
    <div style=" background-image: url('../images/img/pimg.jpg');">
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="../images/icn.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            <li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                            <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>


                        </ul>

                    </div>
                </div>
            </nav>

        </header>


        <div class="page-wrapper">
            <section class="contact-page inner-page">
                <div class="container ">
                    <div class="row">
                    
                        <div class="col-md-12">
                        <div class="register-form">
                            <div class="widget">
                                <div class="widget-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="form-group col-sm-6 ">
                                                <label for="exampleInputEmail1">Name:</label>
                                                <input class="form-control" type="text" name="nam" id="example-text-input"placeholder="User Name" require>
                                            
                                            </div>
                                            

                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Email: </label>
                                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Email" require>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1">Password:</label>
                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1"placeholder="Password" require>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1">Confirm Password :</label>
                                                <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Confirm Password" require>
                                            </div>
                                           

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p> <input type="submit" value="Register" name="submit" class="btn"> </p>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <small>Already have an Acount? <a href="login.php">login</a></small>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- *links of package or framwork js  -->
     <!-- Alert Notifaction js -->
     <script src="../js/alertify.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
   
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/animsition.min.js"></script>
    <script src="../js/bootstrap-slider.min.js"></script>
    <script src="../js/jquery.isotope.min.js"></script>
    <script src="../js/headroom.js"></script>
    <script src="../js/foodpicky.min.js"></script>
</body>

</html>