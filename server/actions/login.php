<?php session_start(); 

include '../db/db.php';

if (isset($_POST['login'])){ 

    $data = [
        'username' => $_POST['username'],
        'password'  => $_POST['password'],
    ]; 
    $result = "select * from tbl_users where username = :username";
    $result = DB::query($result, array(':username' => $data['username']));

    if(count($result) > 0 ){
        if(password_verify($data['password'], $result[0]['pass'])){
            $_SESSION['logged_in'] = $result[0]; 
            header("location: ../adminhome.php");
            
        }   
    } 
    $returned = [
        'message' => 'Account not Found.',
        'type'  => 'error'
    ];
    $_SESSION['returned'] = $returned;
    header("location: ../adminhome.php");     
}
else{
    echo "Not found"; 
    header("location: ../login.php");
}