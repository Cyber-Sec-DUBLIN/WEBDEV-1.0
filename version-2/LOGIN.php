<?php

    $NAME=$_POST["username"];
    $PASSWORD=$_POST["password"];
    $EMAIL=$_POST["email"];

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    
<form  action="home.php" method="POST">
    <label for="username">Username</label>
    <input type ="text" name="username" id="username" required maxlength="20">

    <label for="email">email</label>
    <input type="email" name="email" id="email"required>

    <label for="password">password</label>
    <input type="text" name="password" id="password" required>
    <input type="submit" class="button">
      </form>  

</body>
</html>