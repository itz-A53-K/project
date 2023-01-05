<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="css/header_footer.css">
    <!-- <link rel="stylesheet" href="css/utils.css"> -->
    <link rel="stylesheet" href="css/edit.css">
</head>

<body>
    <?php
        session_start();
        include 'partial/_dbConnect.php';
        include 'partial/_header.php';
      
        if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!='true'){
            $_SESSION['alert']="Please register first";
            header('Location: regi.php');
        }
        else{
            echo '
                <section class="body">
                    ';
                    include 'partial/_alert.php';
                    
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
                                        <button class="btn edit" id=""><a href="update.php?id=$sNo&fn=$row[name]&dn=$row[date]&vc=$row[vacCenter]&vd=$row[vacDist]">Edit</button></a>
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
    <script src="/project/js/logout.js"></script>
    <script src="/project/script.js"></script>
</body>

</html>