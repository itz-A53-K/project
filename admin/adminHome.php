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
         
        </div>
    </section>
    ';
    }
    ?>
    <script src="/project/admin/js/logout.js"></script>
</body>

</html>