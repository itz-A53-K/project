<!-- by ak -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/bookSlot.css">
    <link rel="stylesheet" href="css/header_footer.css">
</head>

<body>
    
    <?php
    session_start();
    if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin']!='true'){
        $_SESSION['alert']="Please register first";
        header('Location: regi.php');
    }
    else{
        include('partial/_dbConnect.php');
        include('partial/_header.php');
        echo '
        <section class="body">
        ';
        include 'partial/_alert.php';

        echo '
            <div class="container">
                <h1>Book Vaccine Slot</h1>
                <form action="partial/_bookSlot_functional.php" method="post" class="form">
                    <div class="input-box">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter full name" required>
                    </div>

                    <div class="input-box">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="input-box">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" placeholder="Enter your age" required>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label for="phNo">Phone Number</label>
                            <input type="number" id="phNo" name="phNo" placeholder="Enter phone number" required>
                        </div>

                    </div>
                    <div class="gender-box">
                        <label>Gender</label>

                        <div class="gender">
                            <input type="radio" id="check-male" name="gender" value="male">
                            <label for="check-male">Male</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-female" name="gender" value="female">
                            <label for="check-female">Female</label>
                        </div>
                        <div class="gender">
                            <input type="radio" id="check-other" name="gender" value="other">
                            <label for="check-other">Other</label>
                        </div>

                    </div>
                    <div class="input-box address">
                        <label for="streetName">Address</label>
                        <input type="text" id="streetName" name="streetName" placeholder="Enter street name" required>
                        <div class="column">
                            <input type="text" id="district" name="district" placeholder="District" required>
                            <input type="text" id="ps" name="ps" placeholder="Police Station" required>
                        </div>
                        <div class="column">
                            <input type="text" id="po" name="po" placeholder="Post Office" required>
                            <input type="number" id="pinc" name="pinc" placeholder="Enter PIN code" required>
                        </div>
                        <div class="select-box">
                            <select>
                                <option hidden>ID Proof</option>
                                <option>Aadhar</option>
                                <option>Pan Card</option>
                                <option>Voter ID</option>
                            </select>
                        </div>
                        <input type="text" id="id_num" name="id_num" placeholder="Enter ID Proof number">
                        <!-- <input type="text" placeholder="Vaccine Center" required> -->
                    </div>

                    <h3 >Guardian\'s Details:</h3>
                    <div class="input-box">
                        <label for="g_name">Name</label>
                        <input type="text" id="g_name" name="g_name" placeholder="Enter name" required />
                    </div>

                    <div class="input-box">
                        <label for="g_ph">Phone Number</label>
                        <input type="number" id="g_ph" name="g_ph" placeholder="Enter phone number" required />
                    </div>

                    
                    <br>


                    <h3 >Vaccine Details</h3>
                    <div>
                        <div class="input-box">
                            <label for="vacDist">District</label>
                            <div class="select-box">
                                <select id="vacDist" name="vacDist">
                                    <option hidden>Select District</option>
                                    ';
                                    $dist_name="SELECT * FROM `vaccine_dist_wise` ";
                                    $dist_name_result=mysqli_query($conn,$dist_name);
                                    
                                    while($row=mysqli_fetch_assoc($dist_name_result)){
                                        echo  '
                                        <option value="'.$row["dist_name"].'">'.$row["dist_name"].'</option>
                                        ';
                                    }

                                    echo'
                                </select>
                            </div>
                        </div>
                        <div class="input-box">
                            <label for="vacCenter">Vaccine center</label>
                            <div class="select-box">
                                <select id="vacCenter" name="vacCenter">
                                    <option hidden> Select Vaccine Center</option>
                                    ';
                                    $dist_name="SELECT * FROM `vaccine_dist_wise` ";
                                    $dist_name_result=mysqli_query($conn,$dist_name);
                                    
                                    while($row=mysqli_fetch_assoc($dist_name_result)){
                                        echo  '
                                        <option value="'.$row["dist_name"].'">'.$row["dist_name"].'</option>
                                        ';
                                    }

                                    echo '
                                </select>
                            </div>
                        </div>
                        <div class="input-box">
                            <label for="date"> Date</label>
                            <input type="date" id="date" name="date" placeholder="Enter date" required>
                        </div>
                        <div class="input-box">
                            <label for="dose">Vaccine dose</label>
                            <div class="select-box">
                                <select name="dose" id="dose">
                                    <option hidden>Select vaccine dose</option>
                                    <option value="1">1st Dose</option>
                                    <option value="2">2nd Dose</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <center><button class="btn">Book Slot</button></center>
                </form>
            </div>
        </section>
    ';
    }
    ?>
    <footer>
        <h1>Copyright &copy; Coid win.com</h1>
        <p>Designed & developed by: Mamud, Mahibul.</p>
    </footer>
    <script src="/project/js/logout.js"></script>
    <script src="/project/js/script.js"></script>
</body>

</html>