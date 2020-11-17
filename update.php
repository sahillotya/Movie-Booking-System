<?php

//update.php

include('dataBase.php');

$query = "
UPDATE user 
SET ".$_POST["name"]." = '".$_POST["value"]."' 
WHERE user_id = '".$_POST["pk"]."'
";

$connect->query($query);

?>