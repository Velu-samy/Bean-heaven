
<?php

$con = mysqli_connect("localhost","root","","cake shop");

if (!$con){
    die("connection error");
}

else{
    echo "connected";
}



?>

