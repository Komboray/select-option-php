<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operation</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="username">Username</label>
        <input type="text" name = "username" >

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <select name="rooms" id="rooms">
            <option value="Triage">Triage</option>
            <option value="Dr Office">Dr's Office</option>
            <option value="lab">Lab</option>
        </select>
        <input type="submit" value="Submit" name = "submit">
    </form>
</body>
</html>
<?php
include("conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
    
        $rooms = $_POST["rooms"];
    
        echo "$username";
        echo "$email";
        echo "$rooms";
    
    
    }
}


?>