<!-- by ak -->
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="css/bookSlot.css" />
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/utils.css">
</head>

<body>
    <section class="container">
        <header>Book Vaccine Slot</header>
        <form action="#" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" required>
            </div>

            <div class="input-box">
                <label>Email Address</label>
                <input type="text" placeholder="Enter email address" required>
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter phone number" required>
                </div>

            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="gender">
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="gender">
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="gender">
                        <label for="check-other">Other</label>
                    </div>
                </div>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street name" required>
                <div class="column">

                    <input type="text" placeholder="District" required>
                    <input type="text" placeholder="Police Station" required>
                </div>
                <div class="column">
                    <input type="text" placeholder="Post Office" required>
                    <input type="number" placeholder="Enter PIN code" required>
                </div>
                <div class="select-box">
                    <select>
                        <option hidden>ID Proof</option>
                        <option>Aadhar</option>
                        <option>Pan Card</option>
                        <option>Voter ID</option>
                    </select>
                </div>
                <input type="text" placeholder="Enter ID Proof number">
                <!-- <input type="text" placeholder="Vaccine Center" required> -->
            </div>

            <h3 style="margin:15px 0">Guardian's Details:</h3>
            <div class="input-box">
                <label>Name</label>
                <input type="text" placeholder="Enter name" required />
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter phone number" required />
                </div>
                <!-- <div class="select-box">
                  <select>
                    <option hidden>Relationship</option>
                    <option>Son</option>
                    <option>Daughter</option>
                    <option>Wife</option>
                    <option>Other's</option>
                  </select>
                </div> -->
            </div>
            <br>

            <h3 style="margin:15px 0">Vaccine Center Details</h3>
            <div>
                <div class="input-box">
                    <label for="vacDist">District</label>
                    <div class="select-box">
                        <select id="vacDist">
                            <option hidden>Select District</option>
                            <option>Nalbari</option>
                            <option>Guwahati</option>
                            <option>Tezpur</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label for="vacCenter">Vaccine center</label>
                    <div class="select-box">
                        <select id="vacCenter">
                            <option hidden> Select Vaccine Center</option>
                            <option>Nalbari</option>
                            <option>Guwahati</option>
                            <option>Tezpur</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label> Date</label>
                    <input type="date" placeholder="Enter date" required>
                </div>
            </div>
            <br>
            <center><button>Submit</button></center>
        </form>
      
    </section>
</body>

</html>