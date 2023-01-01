<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    session_start();
    include '_dbConnect.php';

    $btnValue=$_POST['btnValue'];
    if($btnValue=="accept"){
        $slot_id=$_POST['slot_id'];
        $sql=""
    }
    else if($btnValue=="reject"){
        $slot_id=$_POST['slot_id'];
        $sql=""
       
    }    
}
?>