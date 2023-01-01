<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/adminhome.css">
</head>

<body>
    <?php
        session_start();
        include 'partial/_dbConnect.php';
        include 'partial/_header.php';
      
        if(!isset($_SESSION['aLoggedin']) && $_SESSION['aLoggedin']!='true'){
            $_SESSION['alert']="Please register first";
            header('Location: adminLogin.php');
        }
        else{
            echo '
    <section class="body">
        ';
        include 'partial/_alert_2.php';

        if ($_SERVER['REQUEST_METHOD']) {
            session_start();
            include '_dbConnect.php';
        
            $loginEmail=$_POST['loginEmail'];
            $loginPass=$_POST['loginPass'];
            $loginConfPass=$_POST['loginConfPass'];
            
            $checkUser="SELECT * FROM `users` WHERE userEmail='$loginEmail'";
            $result=mysqli_query($conn,$checkUser);
            $noOfRows=mysqli_num_rows($result);
        
            if ($noOfRows==1) {

            }
        }
        else{
            
        echo '
        <div class="container">
       <center> <div class="select-box">
        <select>
            <option hidden>ID Proof</option>
            <option>Aadhar</option>
            <option>Pan Card</option>
            <option>Voter ID</option>
        </select>
    </div></center>
    <input type="text" id="id_num" name="id_num" placeholder="Enter ID Proof number"  >
    <input type="submit" value="Verify">
         
        </div>
    </section>
    ';
        }
    }
    ?>
    
    <script src="/project/admin/js/logout.js"></script>
</body>

</html>