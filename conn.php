<?php

$localhost = "localhost";
$username = "root";
$pass = "";
$db_name = "nyalife";
$conn = "";

$conn = mysqli_connect($localhost, $username, $pass, $db_name);

if($conn){
    // echo "You are connected!";
}else{
    echo "There was a problem!";
}