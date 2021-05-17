<?php 

$con=mysqli_connect('localhost', 'root', '', 'report');

if(mysqli_connect_error()){
    echo "Failed to connect".mysqli_connect_error(); 
}

date_default_timezone_set('Africa/Harare')
?>