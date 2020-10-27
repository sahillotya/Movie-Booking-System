<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$uname = $_POST["username"];
$pass = $_POST["password"];
$age = $_POST["age"];
$email=$_POST["email"];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: rgb(220,220,220);position: sticky;z-index: 100;">
        <img src="https://img.icons8.com/nolan/64/starred-ticket.png"/>&nbsp;&nbsp;<a class="navbar-brand" href="index.html" style="background: rgba(255,255,255,0);text-align: left;color:#3659FF;"><h3>Movie Booking Seva</h3></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="#" class="text-decoration-none"><h6 style="padding-top: 0.8em;float:right">ABOUT US </h6></a></li>
                    <li class="nav-item" style="padding-left:30px;padding-top: 0.4em;float:right"><form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"><i class="fa fa-search" style="border-color: rgb(72,72,72);filter: contrast(0%) grayscale(0%);"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                    </form></li>
                    <li class="nav-item"><div class="dropdown" style="padding-right: 43px;padding-top: 0.8em;padding-left:3em;padding-bottom:5px;float:right"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Select City</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Mumbai</a><a class="dropdown-item" href="#">Delhi</a><a class="dropdown-item" href="#">Chandigarh</a></div>
                    </div> </li>
                    </div><a href="Account.html" style="padding-right: 5px;">Username</a><a class="btn btn-light action-button" role="button" href="Account.html" style="width: 50px;"><i class="fa fa-user"></i></a></div>
                </ul>       
    </nav>
    <div id="promo">
        <div class="jumbotron" style="background: rgba(102,215,215,0.67);">
            <h1 style="color: rgb(0,0,0);text-align: center;">Account Details</h1>
            <p></p>
        </div>
    </div>
    <div class="container">
        <div class="table-responsive table-borderless">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <td><strong>Name: </strong></td>
                        <td><?php echo $fname." ".$lname ?></td>
                    </tr>
                    <tr>
                        <td><strong>Username:</strong></td>
                        <td> <?php echo $uname; ?> </td>
                    </tr>
                    <tr>
                        <td><strong>Email ID:</strong></td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Age:</strong></td>
                        <td><?php echo $age; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Password:</strong></td>
                        <td><i class="icon ion-android-more-horizontal"></i><i class="icon ion-android-more-horizontal"></i><i class="icon ion-android-more-horizontal"></i><?php // echo $pass; ?></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>