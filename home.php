<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <?php
  include 'partial/_dbConnect.php';
  include 'partial/_header.php';
  ?>
    <section class="body">
        <div class="intro">
            <div class="introLeft">
                <div>
                    <h1>India's Glorious Journey of Vaccination</h1>
                </div>
                <div>
                    <h3>We are here for you</h3>
                    <h2>Let's Defeat COVID-19 !</h2>
                    <div class="btnDiv">
                    <?php
                      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=='true'){
                          echo '
                          <a class="btn" href="/project/bookSlot.php">Book Vaccine Slot</a>

                          ';
                      }
                      else{
                        echo '
                        <a class="btn" href="/project/regi.php">Register</a>
                        <a class="btn" href="/project/login.php">Login</a>
                        ';
                      }
                      ?>
                    </div>
                </div>
            </div>

            <div>
                <img class="independance" src="/project/image/independance.svg" alt="">
            </div>
        </div>

        <div class="container">
            <div>
                <img class="vEarth" src="/project/image/hero-banner.png" alt="">
            </div>
            <div class="text">
                <h1>Need To Know !</h1>
                <div>
                    <h2>How Virus Spread ?</h2>
                    
                    <ul>
                      <li>
                        <h3>Human Contact</h3>
                      </li>
                      <li>
                        <h3>Air Transmission</h3>
                      </li>
                      <li>
                        <h3>Contaminated Objects</h3>
                      </li>
                    </ul>
                    </h2>
                    
                </div>
            </div>
        </div>
    </section>

    <script src="/project/js/logout.js"></script>
</body>

</html>