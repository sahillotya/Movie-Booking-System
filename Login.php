<?php
		require('dataBase.php');
		if (isset($_POST['submit'])){
		$user=$_POST['username'];
		$pass=$_POST['password'];
        $pass=hash('sha256',$pass);
        $pass=substr($pass,0,20);
        
		$query = "SELECT * FROM `user` WHERE username='$user' and pass='$pass'";
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
        $row = $result -> fetch_array(MYSQLI_NUM);
        //printf ("%s (%s), %s,%s, [%s]\n", $row[0], $row[1],$row[2],$row[3],$row[4]);
        //echo $pass;
		if ($count == 1){
		//Pass
			echo("<script type='text/javascript'>alert('LOGGED IN SUCCESSFULLY')</script>");
		}
		else{
		//Failed
			echo("<script type='text/javascript'>alert('USERNAME OR PASSWORD IS INCORRECT')</script>");
		}
	}
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
    <link rel="stylesheet" href="assets/css/Login-Form-Dark-1.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: rgb(220,220,220);position: sticky;z-index: 100;">
        <img src="https://img.icons8.com/nolan/64/starred-ticket.png"/>&nbsp;&nbsp;<a class="navbar-brand" href="index.php" style="background: rgba(255,255,255,0);text-align: left;color:#3659FF;"><h3>Movie Booking Seva</h3></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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

                </ul>       
    </nav>
    <div class="login-dark">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            
                <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                <h6 id="usercheck" style="color: red;" > 
                    **Username is missing 
              </h6> 

              
                <input class="form-control" type="password" placeholder="Password" name="password" id="password"> 
                <h6 id="passcheck" style="color: red;"> 
                    **Please Fill the password 
                </h6>
                
                <button class="btn btn-primary btn-block" type="submit" id="submit" name="submit">Log In</button>
                <a class="forgot" href="signup.html" style="color: rgb(65,129,193);">Don't have an account? Sign-up</a></form>
            <!-- <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><a class="btn btn-primary btn-block" role="button" href="index.php">Log In</a></div><a class="forgot" href="signup.html" style="color: rgb(65,129,193);">Don't have an account? Sign-up</a></form> -->
    </div>
    <div></div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/login-validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>