<?php
if(isset($_POST['SubmitButton'])){ //check if form was submitted
    require('dataBase.php');
    $name = $_POST["name"];
    $msg = $_POST["msg"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];



    $sqlreg = "INSERT INTO contact(`name`, `message`, `email`, `phone`) VALUES ('$name','$msg','$email','$phone')";
    $current_id = mysqli_query($conn, $sqlreg) or die("<b>Error:</b> Problem while submitting<br/>" . mysqli_error($conn));
    $message = "Success! You entered: ";
    if($current_id){
        header("Location:index.php");
    }
} 

?>