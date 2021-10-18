<?php session_start();

include '../db/db.php';


if(isset($_POST['register'])){

    $data = [
        'id_' => uniqid(),
        'title' => $_POST['title'],
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'gender' => $_POST['gender'],
        'mobile' => $_POST['mobile'],
        'affiliation' => $_POST['affiliation'],
        'designation' => $_POST['designation']
    ];
    
    if(!$data['title'] || !$data['fullname'] || !$data['email'] || !$data['gender'] || !$data['mobile'] || !$data['affiliation'] || !$data['designation']){
        
        $promise = [
            'message' => 'Fill up the fields',
            'class' => 'alert-danger',
            'type'  => 'error'
        ]; 

        $_SESSION['returned'] = $promise;        
        header('location: ../../registration.php'); 
        return;  
        

    }  


    $result = "insert into tbl_registers (id_, title, fullname, email, gender, mobile, affiliation, designation) values (:id_, :title, :fullname, :email, :gender, :mobile, :affiliation, :designation)";
    $result = db::query($result, $data);
    if(!$result){
        $promise = [
            'message' => 'Something Went Wrong.',
            'class' => 'alert-danger',
            'type'  => 'error'
        ]; 
        
        $_SESSION['returned'] = $promise; 
        
    } 

    $promise = [
        'message' => 'Successfully Registered.',
        'class' => 'alert-success',
        'type'  => 'success'
    ]; 
    
    $_SESSION['returned'] = $promise; 

    header('location: ../../registration.php'); 
    return;  
    

}
