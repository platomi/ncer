<?php session_start();

include '../db/db.php';


if(isset($_POST['inviteme'])) {
    $data = [
        'email' => $_POST['email'],
    ];
    $result = "insert into tbl_invitation (email) values (:email)";
    $result = DB::query($result, $data);

    if($result){
        $promise = [
            'message' => 'Email Successfully Sent.',
            'class' => 'alert-success',
            'type'  => 'success'
        ]; 
        
        $_SESSION['returned'] = $promise; 
    
        header('location: ../../'); 
        return;  
    }
    else{
        $promise = [
            'message' => 'Something went wrong!.',
            'class' => 'alert-danger',
            'type'  => 'error'
        ]; 
        
        $_SESSION['returned'] = $promise; 
    
        header('location: ../../'); 
        return; 
        
    }


}