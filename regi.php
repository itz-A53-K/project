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
            <div class="container">
                <h2>Registration Here</h2><br>
                <form id="Registration" method="post" action="partial/_signupFunctional.php" onsubmit="return validateCaptcha()">
                    <div>
                        <label>Name:</label>
                        <br>
                        <input type="text" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <br>
                    <div>
                        <label>Your Age:</label><br>
                        <input type="number" name="age" id="name" placeholder="How old are you?">
                    </div>
                    <br>
                    <div>
                        <label>Phone Number:</label><br>
                        <input type="number" name="phno" id="phno"  placeholder="Enter your Number" required>
                    </div>
                    <br>
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
                    <br>
                    <div>
                        ID Proof
                        <select name="ID_Proof" id="ID Proof">
                            <option value="Aadhaar">Aadhaar</option>
                            <option value="Pan Card">Pan Card</option>
                            <option value="Voter Id">Voter Id</option>
                        </select><br>
                        <input type="text" name="ID_no" id="ID_no" placeholder="ID No">
                    </div><br>
                    <div class="address">
                        <p>Address</p>
                        <textarea name="address" id="" cols="10" rows="10"></textarea>
                        <span></span>
                    </div><br>
                    <div>
                        <label>Email:</label>
                        <br>
                        <input type="email" name="email" id="name" placeholder="Enter your valid Email">
                    </div>
                    <br>
                    
                    <div class="column">
                    <div class="txt_field">
                        <label>Password</label>
                        <br>
                        <input type="password" name="pass" placeholder="Enter your Password " required>
                    </div>
                    <br>
                    <div class="txt_field">
                        <h2 id="captcha"></h2>
                        <!-- <label>Captcha</label>
                        <br> -->
                    <input type="text" id="cpatchaTextBox"  name="cap"placeholder="Enter captcha " required>
                </div>
                <br>
                </div>
                    <input type="submit" value="Submit">
                </form>
                <div>
                    <h3>Already Have An Account? <a href="/proj/login.php"> Login</a></h3>
                </div>

            </div>
            <!-- end regist -->
        </div> 
    </section>
    <!-- end main -->
    <script src="js/captcha.js"></script>
    
</body>
</html>