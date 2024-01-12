<?php
include("conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
    
        $rooms = $_POST["rooms"];
    
        echo $username;
        echo $email;
        // echo $rooms;
    
    
    }
}
