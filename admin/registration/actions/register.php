<?php session_start();

include '../db/db.php';
if(isset($_POST['register'])){
    $data = [
        'id_' => uniqid(),
        'fname' => $_POST['fname'],
        'mname' => $_POST['mname'],
        'lname' => $_POST['lname'],
        'bdate' => $_POST['bdate'],
        'contact' => $_POST['contact'],
        'email' => $_POST['email']        
    ];
    
    if(!$data['fname'] || !$data['mname'] || !$data['lname'] || !$data['bdate'] || !$data['contact'] || !$data['email']){
        $returned = [
            'message' => 'Theres an empty field',
            'type'      => 'error' 
        ]; 
        $_SESSION['returned'] = $returned; 
        header('location: ../adminhome.php'); 
        return;

    }

    $result = "insert into tbl_peoples (id_, fname, mname, lname, bdate, contact, email) values (:id_, :fname, :mname, :lname, :bdate, :contact, :email)";
    $result = db::query($result, $data);

    if(!$result) {
      
    }

    header("location: ../adminhome.php");
    


}
else{
    header("location: ../login.php");
}