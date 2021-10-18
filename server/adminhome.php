<?php session_start(); 
include 'db/db.php';
    if(!isset($_SESSION['logged_in'])){
        header("location: login.php");
    }

    $registered = "select * from tbl_peoples order by id desc";
    $registered = DB::query($registered);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


</head>
<body>
    registration 
    <?php
      if(isset($_SESSION['returned'])){
        echo '<p>'. $_SESSION['returned']['message'].'</p>';
        unset($_SESSION['returned']); 
    }
    ?>

    <form action="actions/register.php" method="post">
        <br>First Name:
            <input type="text" name="fname" id="">
        <br>Middle Name: 
            <input type="text" name="mname">
        <br>Last Name: 
            <input type="text" name="lname">
        <br>Birth Date: 
            <input type="date" name="bdate" id="" max="2020-01-01">
        <br>Contact:
            <input type="number" name="contact">
        <br>E-mail:
            <input type="email" name="email">
        <br>
            <input type="submit" value="Register" name="register">
    </form>

    <hr>
        <table>
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Birtdate</th>
                <th>Contact</th>
                <th>Email</th> 
            </tr>
            <?php foreach($registered as $registered){ ?>
            <tr>
                <td><?= $registered['fname']?></td>
                <td><?= $registered['mname']?></td>
                <td><?= $registered['lname']?></td>
                <td><?= $registered['bdate']?></td>
                <td><?= $registered['contact']?></td>
                <td><?= $registered['email']?></td>
                
            </tr>
            <?php } ?>
        </table>
    <hr>

    <br>
    <a href="logout.php" rel="noopener noreferrer">Logout</a>
</body>
</html>