<?php
if ($_SERVER['REQUEST_METHOD']) {
    include '_dbConnect.php';

    $loginPh=$_POST['loginPh'];
    $loginPass=$_POST['loginPass'];
    $loginConfPass=$_POST['loginConfPass'];
    $checkUser="SELECT * FROM `users` WHERE ph_NO='$loginPh'";
    $result=mysqli_query($conn,$checkUser);
    $noOfRows=mysqli_num_rows($result);

    if ($noOfRows==1) {
        if ($loginPass == $loginConfPass) {
            $row=mysqli_fetch_assoc($result);
            $verifyPass = password_verify($loginConfPass,$row['password']);// verify the hash of the password
            if ($verifyPass) {
                // echo 'login success';
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['userName'] = $row['userName'];
                $_SESSION['user_id'] = $row['user_Id'];
            }
            else{
                echo 'wrong pass';
            }
        }
        else {
            echo 'both pass not match';
        }
    }
    else{
        echo '>1';
    }
    header('Location: /project/home.php');
}


?>