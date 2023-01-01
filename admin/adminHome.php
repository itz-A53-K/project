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

        if ($_SERVER['REQUEST_METHOD']=="POST") {
            include 'partial/_dbConnect.php';
        
            $id_num=$_POST['id_num'];
            $checkUser="SELECT * FROM `book_slot` WHERE id_num='$id_num'";
            $result=mysqli_query($conn,$checkUser);
            $noOfRows=mysqli_num_rows($result);
        
            if ($noOfRows==1) {
                echo'69';

            }
        }
        else{
            
        echo '
        <form method="post" action="adminHome.php">

           <div class="container">
            <center> <div class="select-box">
              <select>
               <option hidden>ID Proof</option>
                <option>Aadhar</option>
                 <option>Pan Card</option>
                  <option>Voter ID</option>
             </select>
          </div>
             </center>

    <input type="text" id="id_num" name="id_num" placeholder="Enter ID Proof number"  >
        <input type="submit" value="Verify">
         
        </div>
          </form>
    </section>
    ';
        }
    }
    ?>

    <script src="/project/admin/js/logout.js"></script>
</body>

</html>