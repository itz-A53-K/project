<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/utils.css">
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
  ?>
    <section class="body">
        ';
        include 'partial/_alert_2.php';

        echo '
        <div class="container">
            <div class="titleCard">
                <div class="sno">S. No.</div>
                <div class="name">Name</div>
                <div class="date">Vaccination Date</div>
                <div class="cname">Center</div>
                <div class="btndiv">Action</div>
            </div>
            ';
            $user_id=$_SESSION['user_id'];
            $sql="SELECT * FROM `book_slot` WHERE user_id=$user_id";
            $result=mysqli_query($conn,$sql);
            $sNo=0;

            // echo $user_id;
            while($row=mysqli_fetch_assoc($result)){
            $sNo=$sNo+1;
            echo '

            <div class="card">
                <div class="sno">'.$sNo.'</div>
                <div class="name">'.$row['name'].'</div>
                <div class="date">'.$row['date'].'</div>
                <div class="cname">'.$row['vacCenter'].',&nbsp;'.$row['vacDist'].'</div>
                <div class="btndiv">
                    <button class="btn verify" id="">Verify</button>
                    <button class="btn delete" id="">Cancel</button>
                </div>
            </div>
            ';
            }
            echo '
        </div>
    </section>
    ';
    }
    ?>
    <script src="/project/admin/js/logout.js"></script>
</body>

</html>