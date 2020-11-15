<?php

$user = "root"; 
$password = ""; 
$database = "ecodescart"; 
$hostname = "127.0.0.1";

$connection = mysqli_connect( $hostname, $user, $password, $database ) or die( ' Falha na conexão!!!' ); 


?>