<?php
session_start();
include 'db.php';
 
    $data = [
        'id_' => uniqid(),
        'fname' => 'Tom',
        'mname' => 'Daano',
        'lname' => 'Cadenas',
        'username' => 'admin',
        'pass'  => password_hash('tomas', PASSWORD_DEFAULT),
        'role'  => 'superadmin',
        'active'    => 1

    ]; 
    
    $createuser = "insert into tbl_users (id_, fname, mname, lname, username, pass, role, active) values (:id_, :fname, :mname, :lname, :username, :pass, :role, :active)";

    $createuser = DB::query($createuser, $data);

    if($createuser){
        echo "hello world";
    }

