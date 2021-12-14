<?php
require_once 'database/conn.php';
if(!$_GET['id'])
{
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");
}else{
    $id=$_GET['id'];
    $result=$crud->deleteAttendees($id);
    if($result)
    {
        header('location: viewrecords.php');
    }else{
        include 'includes/errormessage.php';
        
    }
}
?>