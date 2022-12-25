<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <?php
  include 'partial/_dbConnect.php';
  include 'partial/_header.php';
 echo ' 
  <section class="body">
    <div class="center">
        <h1> Log In 💉</h1>

        <form method="post" action="partial/_loginFunctional.php">
          <div class="txt_field">
            <input type="number" name="loginPh" required>
            <span></span>
            <label>Phone No.</label>
          </div>
          <div class="txt_field">
            <input type="password" name="loginPass" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="txt_field">
            <input type="password"name="loginConfPass" required>
            <span></span>
            <label> Conform Password</label>
          </div>
          
          <center>
          <input type="submit" value="Login">
          </center>
          <center>Login as <a href="/project/admin/partial/_adminLogin.php">admin</a></center>
          
        </form>
    </div>
  </section>
    ';
    ?>
</body>
</html>