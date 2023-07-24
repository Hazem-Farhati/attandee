<?php 
require_once 'db/conn.php' ;
if(!$_GET['id']){
    // echo 'error';
    // include 'includes/error.php';
    header("location: viewrecords.php");
}else{
//get id values    
    $id=$_GET['id'];
// Call Crud Function
    $result=$crud->deleteAttendee($id);
    //Redirct TO index.php
if($result){
    header("location:viewrecords.php");
}
    else
    {
        include 'includes/error.php';
}
}
?>