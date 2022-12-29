<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/regi.css">

</head>

<body onload="createCaptcha()">
    <?php
  include 'partial/_dbConnect.php';
  include 'partial/_header.php';
   ?>
    <section class="body">
        <div class="main">
            <div class="container" style="display: flex; flex-direction:column; align-items:center">
                <h2>Registration</h2><br>
                <?php
                    if(isset($_SESSION['otpVarified'])&& $_SESSION['otpVarified']=="TRUE"){
                        echo'
                            <form id="Registration" method="post" action="partial/_signupFunctional.php" onsubmit="return validateCaptcha()">
                                <div>
                                    <label>Name:</label>
                                    <br>
                                    <input type="text" name="name" id="name" placeholder="Enter your name">
                                </div>
                                
                                <div>
                                    <label>Your Age:</label><br>
                                    <input type="number" name="age" id="name" placeholder="How old are you?">
                                </div>
                                
                                <div>
                                    <label>Phone Number:</label><br>
                                    <input type="number" name="phno" id="phno"  placeholder="Enter your Number" required>
                                </div>
                                
                                <div>

                                    <span>Gender:</span>
                                    &nbsp;&nbsp;
                                    <input type="radio" name="gender" id="male" value="male">
                                    &nbsp;
                                    <label for="male">Male</label>
                                    &nbsp;&nbsp;
                                    <input type="radio" name="gender" id="female" value="female">
                                    &nbsp;
                                    <label for="female">Female</label>
                                    &nbsp;&nbsp;
                                    <input type="radio" name="gender" id="other" value="other">
                                    &nbsp;
                                    <label for="other">Other</label>
                                    
                                </div>
                                
                                <div>
                                    ID Proof
                                    <select name="ID_Proof" id="ID Proof">
                                        <option value="Aadhaar">Aadhaar</option>
                                        <option value="Pan Card">Pan Card</option>
                                        <option value="Voter Id">Voter Id</option>
                                    </select><br>
                                    <input type="text" name="ID_no" id="ID_no" placeholder="ID No">
                                </div>
                                <div class="address">
                                    <p>Address</p>
                                    <textarea name="address" id="" cols="10" rows="10"></textarea>
                                    <span></span>
                                </div>
                                <div>
                                    <label>Email:</label>
                                    <br>
                                    <input type="email" name="email" id="name" placeholder="Enter your valid Email">
                                </div>
                                
                                <div class="column">
                                <div class="txt_field">
                                    <label>Password</label>
                                    <br>
                                    <input type="password" name="pass" placeholder="Enter your Password " required>
                                </div>
                                
                                <div class="txt_field">
                                    <h2 id="captcha"></h2>
                                    <!-- <label>Captcha</label>
                                    <br> -->
                                    <input type="text" id="cpatchaTextBox"  name="cap"placeholder="Enter captcha " required>
                                </div>
                                
                                
                                <button type="submit">Submit</button>
                            </form>
                        ';
                    }
                    else{
                        if(isset($_SESSION['otpSent'])&& $_SESSION['otpSent']=="True"){
                            echo'
                            <form action="/project/partial/_otp_varify.php" method="post" class="form" id="RegForm" onsubmit="return otpValidate()">';
                                if(isset($_SESSION['alert'])){
                                    echo ' <h4 style="color:red;">'.$_SESSION['alert'].'</h4>';
                                }
                            echo'
                                <div>
                                    <input type="email" class="verifyEmail" name="verifyEmail" placeholder="Enter your email" value="'.$_SESSION['verifyEmail'].'" disabled>
                                </div>
                                <div>
                                    <h4 style="color:green;">An OTP has been sent to above Email</h4>
                                </div>
                                <div>
                                    <input type="text" id="otp" name="otp" placeholder="Enter OTP" maxlength="4">
                                </div>
                                
                                <button type="submit" class="btnLarge">Varify OTP</button>
                            </form>
                            ';
                        }
                        else{
                            echo'
                            <form action="otp_send.php" method="post" class="form" id="RegForm" onsubmit="return validate_reg_cpatchaBox1()">';
                                if(isset($_SESSION['alert'])){
                                    echo ' <h4 style="color:red;">'.$_SESSION['alert'].'</h4>';
                                }
                            echo'
                                <div>
                                    <input type="email" id="verifyEmail" name="verifyEmail" placeholder="Enter your email" required>
                                </div>
                                <div id="captchaDiv">
                                    <!-- captcha creation -->
                                    <!-- <div id="captcha">
                                    </div> -->
                                    <center><h2 id="captcha"></h2></center>
                                    <input type="text" placeholder="Captcha" id="reg_captchaBox1" required>
                                    <!-- <button type="submit">Submit</button> -->
                                </div>
                                <button type="submit" class="btnLarge">Send OTP</button>
                            </form>
                            ';
                        }
                    
                    }
                ?>
                <div>
                    <h3>Already Have An Account? <a href="/project/login.php"> Login</a></h3>
                </div>

            </div>
            <!-- end regist -->
        </div>
    </section>
    <!-- end main -->
    <footer>
        <h1>Copyright &copy;Covid win.com</h1>
        <p>Designed & developed by: Mamud, Mahibul.</p>
    </footer>
    <script src="js/captcha.js"></script>

</body>

</html>