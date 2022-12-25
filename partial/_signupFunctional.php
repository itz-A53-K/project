<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    include '_dbConnect.php';
    // echo 'wrong pass';
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phno=$_POST['phno'];
    // echo $phno;
    $gender=$_POST['gender'];
    $ID_Proof=$_POST['ID_Proof'];
    $ID_no=$_POST['ID_no'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $check_user="SELECT * FROM `users` WHERE ph_No='$phno'";
    
    $check_result=mysqli_query($conn,$check_user);
    
    $noOfrows=mysqli_num_rows($check_result);
    
    if($noOfrows>0){
        $alert= 'Phone No already exist';
    }
    else{
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        $sql="INSERT INTO `users` ( `userEmail`, `password`,  `userName`, `userAge`, `ph_No`, `gender`, `idProof_Name`, `idProof_No`, `userAddress`) VALUES ( '$email', '$hash', '$name','$age','$phno','$gender','$ID_Proof','$ID_no', '$address')";

        $result=mysqli_query($conn,$sql);
        
        if ($result){
            $alert='succesfull';

        }
        else{
            $alert= 'unsucces';
        }
    }

    header('Location: /proj/home.php');
}

?>