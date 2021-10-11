<?php session_start(); 
    if(isset($_SESSION['logged_in'])){
        header("location: adminhome.php");
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_SESSION['returned'])){
            echo '<p>'. $_SESSION['returned']['message'].'</p>';
            unset($_SESSION['returned']); 
        }
    ?>
    <form action="actions/login.php" method="post">
        username:
            <input type="text" required name="username">
        password:   
            <input type="password" required name="password">
            <input type="submit" value="Login" name="login">
    </form>
</body>
</html>