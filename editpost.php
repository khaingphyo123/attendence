<?php
require_once 'database/conn.php';

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $email=$_POST['Email1'];
    $contact=$_POST['contact'];
    $specialty=$_POST['specialty'];

    $result=$crud->editAttendees($id,$fname,$lname,$dob,$email,$contact,$specialty);
    if($result)
    {
        header('location: viewrecords.php');
    }else{
        include 'includes/errormessage.php';
        
    }
}else{
    include 'includes/errormessage.php';
    
}
?>