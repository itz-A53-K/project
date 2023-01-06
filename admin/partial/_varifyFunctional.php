<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    session_start();
    include '_dbConnect.php';

    $btnValue=$_POST['btnValue'];
    if($btnValue=="accept"){
        $slot_id=$_POST['slot_id'];
        $sql="UPDATE `book_slot` SET `status` = 'accepted' WHERE `book_slot`.`slot_id` = $slot_id";
        $result=mysqli_query($conn,$sql);

        if($result){
            $alert='Accepted successfully';
            
        }
        else{
            $alert='Error, can\'t accepted';

        }
    }
    else if($btnValue=="reject"){
        $slot_id=$_POST['slot_id'];
        $sql="DELETE FROM `book_slot` WHERE `book_slot`.`slot_id` = $slot_id";
        $result=mysqli_query($conn,$sql);

        if($result){
            $alert='Rejected successfully';
        }
        else{
            $alert= 'Error , can\'t rejected';

        }
    } 

    $_SESSION['alert']=$alert;
    header('Location: ../adminHome.php'); 
}
?>