<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbConnect.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phNo=$_POST['phNo'];
    $gender=$_POST['gender'];
    $streetName=$_POST['streetName'];
    $district=$_POST['district'];
    $ps=$_POST['ps'];
    $po=$_POST['po'];
    $pinc=$_POST['pinc'];
    $id_num=$_POST['id_num'];
    $g_name=$_POST['g_name'];
    $g_ph=$_POST['g_ph'];
    $vacDist=$_POST['vacDist'];
    $vacCenter=$_POST['vacCenter'];
    $date=$_POST['date'];
    $dose=$_POST['dose'];

    $address= "streetName= ".$streetName.", dist= ".$district.", PS= ".$ps.", PO= ".$po.", pinc= ".$pinc ;
// echo $address;
    $check_slot="SELECT * FROM `book_slot` WHERE phNo=$phNo and dose=$dose";
    $check_slot_result=mysqli_query($conn,$check_slot);
    $check_slot_num_rows=mysqli_num_rows($check_slot_result);
    //check if slot already booked (corresponding to phno and dose)
    if ($check_slot_num_rows==0){
        $sql="INSERT INTO `book_slot` ( `name`, `email`, `phNo`, `gender`, `address`, `id_num`, `g_name`, `g_ph`, `vacDist`, `vacCenter`, `date`, `dose`) VALUES ( '$name', '$email', '$phNo', '$gender', '$address', '$id_num', '$g_name', '$g_ph', '$vacDist', '$vacCenter', '$date', '$dose')";
        $result=mysqli_query($conn,$sql);

        if ($result) {
            echo 'your slot has been booked successfully';
        }
        else{
            echo 'slot book error';
        }
    }
    else{
        echo 'Your slot has already booked';
    }


}


?>